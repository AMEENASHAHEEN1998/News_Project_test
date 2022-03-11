<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function home(){
        $blogs = Blog::orderBy('id' , 'desc')->limit(3)->get();
        // dd($blogs);
        return view('site.home' , compact('blogs'));
    }

    public function aboutas(){
        return view('site.aboutas');
    }

    public function newsCategory(){
        $blog = Blog::orderBy('id' , 'desc')->limit(1)->get();
        $blogs = Blog::orderBy('id' , 'desc')->get();
        // dd($blog);
        return view('site.newsCategory' , compact('blogs' , 'blog'));
    }

    public function blog($id){
        $blog = Blog::findOrFail($id);
        return view('site.blog' , compact('blog'));
    }

    
}
