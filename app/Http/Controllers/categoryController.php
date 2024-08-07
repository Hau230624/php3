<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cate = Category::all();
        return view('admin.list_cate',compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_cate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cate =[
            'name_cate'=>$request->name_cate
        ];
        Category::create($cate);
        return redirect()->route('list_cate');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = Category::findOrFail($id);
        return view('admin.edit_cate',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = Category::findOrFail($id); 
        if (!$news) {
            return back()->with('error', 'Không tìm thấy bản ghi.');
        }
        $news->update([
            'name_cate' => $request->name_cate,
        ]);
        // dd($request);

        return redirect()->route('list_cate')->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect('admin/list_cate');
    }
}
