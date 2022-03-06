<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function home(){
        return view('site.home');
    }

    public function aboutas(){
        return view('site.aboutas');
    }

    public function newsCategory(){

        return view('site.newsCategory' );
    }

    public function blog(){
        return view('site.blog');
    }
}
