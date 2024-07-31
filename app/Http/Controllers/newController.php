<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class newController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Admin(){
        return view('admin.dashboard');
    }
     public function index()
    {
        
        $data = DB::table('news')->where('cate_id',1)->limit(3)->get();
        $data1 = DB::table('news')->where('cate_id',2)->limit(3)->get();
        $data2 = DB::table('news')->where('cate_id',3)->limit(4)->get();
        $data3 = DB::table('news')->limit(8)->get();
        $data4 = DB::table('news')->orderBy('id','desc')->limit(4)->get();
        return view('client.index',compact('data','data1','data2','data3','data4'));
        // dd($data);
        // echo 1;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data =DB::table('news')->where('id',$id)->first();
        return view('client.detail',compact('data'));
        // dd($data);
    }
    public function showCate(string $id)
    {
        $data =DB::table('categories')->join('news','categories.id','news.cate_id')->where('news.cate_id',$id)->get();
        if($key = request('key')){
        $data =DB::table('categories')->join('news','categories.id','news.cate_id')->where('news.cate_id',$id)->Where('title','like','%'.$key.'%')->get();
        }
        $data1 = DB::table('categories')->where('id',$id)->first();
        return view('client.category',compact('data','data1'));
        // dd($data);
        // echo 1;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
