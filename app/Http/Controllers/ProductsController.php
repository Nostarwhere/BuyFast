<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;

class ProductsController extends Controller
{

    public function __construct()
    {
        $products = new Products;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Danh sách sản phẩm';
        $productsList = Products::all();

        return view('user.products.list', compact('title', 'productsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Thêm mới sản phẩm';
        return view('user.products.create', compact('title'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        $products = Products::create([
            'product_name'         => $request->product_name,
            'product_model'        => $request->product_model,
            'product_description'  => $request->product_description,
            'price'                => $request->price
        ]);

        return redirect()->route('products.product.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        $title = 'Chỉnh sửa sản phẩm';
        return view('user.products.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, $id)
    {
        $products = Products::find($id);
        if(!$products) {
            abort(404);
        }
        $products->update([
            'product_name'         => $request->product_name,
            'product_model'        => $request->product_model,
            'product_description'  => $request->product_description,
            'price'                => $request->price
        ]);

        return redirect()->route('products.product.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Products::find($id);
        $product->delete();

        return redirect()->back();
    }
}
