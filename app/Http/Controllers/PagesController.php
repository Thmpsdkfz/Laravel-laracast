<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome',[
            'foo'=>'FooBar',
            'tasks'=>[
            'Go to store',
            'Go to market',
            'Go to work'
            ]
        ]);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
