<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FromHandle;

class Register extends Controller
{
    function index(){
        return view('form');
    }


    function send(Request $request){
         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required'
         ]);
         $user = new FromHandle();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->number = $request->number;
         $user->save();
         return view('view');
        // print_r($request->all());
        
    }

    function view(){

        $data = FromHandle::all();
        $all = compact('data');

        return view('view')->with($all);
    }
}
