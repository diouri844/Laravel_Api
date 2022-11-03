<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all items :
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // make validation fileds :
        $request->validate([
          'name'=>'required',
          'description'=>'required',
          'slug'=>'required',
          'price'=>'required'
        ]);
        //insert new item :
        Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get specified item by id :
        return Product::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //get the product target :
        $product = Product::find($id);
        //update product body :
        $product->update($request->all());
        // return updated product :
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete selected product with remove option :
        // remove option return 1 if item removed
        return Product::remove($id);
    }

    /**
     * search for   specified resource from storage.
     *
     * @param string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        //delete selected product with remove option :
        return Product::where('name','like','%'.$name.'%')->get();
    }
}
