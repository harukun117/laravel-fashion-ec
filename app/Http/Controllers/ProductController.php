<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index')
            ->with('products', Product::get());
    }

    public function show($id)
     {
        $images = Image::where('product_id', $id)->get();
        return view('product.show', compact('images'))
            ->with('product', Product::find($id));
     }
}
