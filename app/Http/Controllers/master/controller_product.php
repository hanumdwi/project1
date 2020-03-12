<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controller_product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('product')->get();
        
       // dump($categories);
        //dump($product);

        return view ('master/product/index',['product' =>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('master/product/create',['categories' =>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('product')->insert([
            'category_id'       => $request->category_id,
            'product_price'     => $request->product_price,
            'product_stock'     => $request->product_stock,
            'explanation'       => $request->explanation
             ]);
     
             return redirect('productindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = DB::table('product')->where('product_id',$id)->get();
		// passing data product yang didapat ke view edit.blade.php
		return view('master.product.edit',['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('product')->where('product_id',$request->id)->update([
            'category_id'       => $request->category_id,
            'product_name'     => $request->product_name,
            'product_price'     => $request->product_price,
            'product_stock'     => $request->product_stock,
            'explanation'       => $request->explanation
        ]);
     
             return redirect('productindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('product')->where('product_id',$id)->delete();
		
		// alihkan halaman ke halaman product
		return redirect('productindex');
    }
}
