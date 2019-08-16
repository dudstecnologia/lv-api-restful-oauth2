<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest as Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return $product;
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function destroy(Request $request, Product $product)
    {
        $product->delete();

        return $product;
    }
}
