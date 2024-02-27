<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products',[$products]);
    }
    public function show($id)
    {

    }
    public function create()
    {

    }
    public function update($id)
    {

    }
    public function delete($id){

    }
    
}
