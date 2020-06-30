<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all()->sortBy('created_at');
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.actions.input');
    }


    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect(route('products.index'));
    }


    public function show(Product $product)
    {
        //
    }


    public function edit($id)
    {
        $products = Product::all();
        $product = $products->find($id);
        return view('admin.product.actions.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        Product::find($id)->update([
             'name' => $request->name,
             'category' => $request->category,
             'price' => $request->price,
             'qty' => $request->qty,
        ]);
        return redirect(route('products.index'));
    }

    public function destroy(Product $product)
    {
        //
    }
}
