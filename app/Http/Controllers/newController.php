<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class newController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        $data = DB::table('news')->where('cate_id', 1)->limit(3)->get();
        $data1 = DB::table('news')->where('cate_id', 2)->limit(3)->get();
        $data2 = DB::table('news')->where('cate_id', 3)->limit(4)->get();
        $data3 = DB::table('news')->limit(8)->get();
        $data4 = DB::table('news')->orderBy('id', 'desc')->limit(4)->get();
        return view('client.index', compact('data', 'data1', 'data2', 'data3', 'data4'));
        // dd($data);
        // echo 1;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate = Category::all();
        return view('admin.create', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $img = [];
        try {

            if ($request->hasFile("news.img")) {
                $imagePath = Storage::put('products', $request->file("news.img"));
                $img[] = $imagePath;
                $request['new.img'] = $imagePath;
            }
            
            News::create([
                'title' => $request->news['title'],
                'content' => $request->news['content'],
                'author' => $request->news['author'],
                'cate_id' => $request->news['cate_id'],
                'img' => $request['new.img']
            ]);
            
            return redirect()->route('list')->with('success', 'Thao tác thành công!');
        } catch (\Throwable $th) {
            if (Storage::exists($img)) {
                Storage::delete($img);
            }
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('news')->where('id', $id)->first();
        return view('client.detail', compact('data'));
        // dd($data);
    }
    public function showCate(string $id)
    {
        $data = DB::table('categories')->join('news', 'categories.id', 'news.cate_id')->where('news.cate_id', $id)->get();
        if ($key = request('key')) {
            $data = DB::table('categories')->join('news', 'categories.id', 'news.cate_id')->where('news.cate_id', $id)->Where('title', 'like', '%' . $key . '%')->get();
        }
        $data1 = DB::table('categories')->where('id', $id)->first();
        return view('client.category', compact('data', 'data1'));
        // dd($data);
        // echo 1;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = News::findOrFail($id);
        $cate = Category::all();
        return view('admin.edit',compact('data','cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = News::find($id); 
        if (!$news) {
            return back()->with('error', 'Không tìm thấy bản ghi.');
        }
    
        $imgPath = null;
        try {
            if ($request->hasFile("news.img")) {
                if ($news->img && Storage::exists($news->img)) {
                    Storage::delete($news->img);
                }
                $imgPath = Storage::put('products', $request->file("news.img"));
            }

            $news->update([
                'title' => $request->news['title'],
                'content' => $request->news['content'],
                'author' => $request->news['author'],
                'cate_id' => $request->news['cate_id'],
                'img' => $imgPath ?? $news->img 
            ]);
            // dd($request);
    
            return redirect()->route('list')->with('success', 'Cập nhật thành công!');
        } catch (\Throwable $th) {
            // Xử lý lỗi
            return back()->with('error', $th->getMessage());
        }
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        News::destroy($id);
        return redirect('admin/list');
    }
}
