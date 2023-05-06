<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('layouts.public.index');
    }
    public function blog(){
        return view('layouts.public.blog');
    }
    public function category(){
        return view('layouts.public.category');
    }
    public function contact(){
        return view('layouts.public.contact');
    }
    public function elements(){
        return view('layouts.public.elements');
    }
    public function archive(){
        return view('layouts.public.archive');
    }
}
