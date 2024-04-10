<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    function infex(){
        $posts = App\Models\Post::latest('published_at')->get();
        return view('home',compact("posts"));
    }
}
