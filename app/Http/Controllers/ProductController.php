<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.list')-> with('products_in_view', $product);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.form')-> with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $product = new Product();
        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->categoryId = Input::get('categoryId');
        $product->description = Input::get('description');
        $product->image = Input::get('image');
        $product->save();
        return redirect('product');
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
        $product = Product::find($id);
        if ($product == null) {
            return view('404');
        }
        $cagegories = Category::all();
        return view('product.edit')
            ->with('product_in_view', $product)
            ->with('categories', $cagegories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $product = Product::find(Input::get('id'));
        if ($product == null) {
            return view('404');
        }
        $product->name = Input::get('name');
        $product->price = Input::get('price');
        $product->categoryId = Input::get('categoryId');
        $product->description = Input::get('description');
        $product->image = Input::get('image');
        $product->save();
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product == null){
            return response()->json(['error' => 'not found'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'Deleted'], 200);
    }
}
