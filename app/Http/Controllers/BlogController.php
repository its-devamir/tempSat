<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs',compact($blogs));
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
