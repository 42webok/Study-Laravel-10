<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return view('welcome');
    }
    public function contact(){
        return view('welcome');
    }
}
