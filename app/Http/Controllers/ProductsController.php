<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();

        return view('admin.adminHome', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminCreate');
    }

    public function createProcess(Request $request)
    {
        // Image
        $image = Storage::put('public/content_image', $request->file('foto'));



        $products = new Products();
        $products->name = $request->name;
        $products->condition = $request->condition;
        $products->category = $request->category;
        $products->weight = $request->weight;
        $products->price = $request->price;
        $products->product_from = $request->product_from;
        $products->brand = $request->brand;
        $products->price = $request->price;
        $products->discount = $request->discount;
        $products->description = $request->description;
        $products->stock = $request->stock;
        $products->img_path = $image;
        $products->save();

        return redirect(route('admin.home'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $products = Products::find($id);

        return view('admin.adminUpdate', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $products = Products::find($id);
        $products->name = $request->name;
        $products->condition = $request->condition;
        $products->category = $request->category;
        $products->weight = $request->weight;
        $products->price = $request->price;
        $products->discount = $request->discount;
        $products->product_from = $request->product_from;
        $products->brand = $request->brand;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->stock = $request->stock;
        $products->save();

        return redirect(route('admin.home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $products = Products::find($request->id);
        $products->delete();

        return redirect(route('admin.home'));
    }

    public function user()
    {
        $user = User::all();

        return view('admin.adminUser', compact('user'));
    }

    public function destroyUser(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return redirect(route('admin.user'));
    }
}
