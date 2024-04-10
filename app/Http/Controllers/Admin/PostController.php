<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    //
    function index(){
        $posts   = Post::all();
        return view('admin/posts/index',compact('posts'));
    }
    function create(){
        $category = Category::all();
        return view("admin/posts/create",compact('category'));
    }
}
