<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class Crud extends Controller
{
    public function index(){
        $data = UserModel::all();
        $alldata = compact('data');
        return view('view')->with($alldata);
    }


    public function insert(){
        return view('form');
    }


    public function addData(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required'
        ]);
        $add = new UserModel();
        $add->name = $request->name;
        $add->email = $request->email;
        $add->number = $request->number;
        $add->save();
        return redirect('/');
    }

    public function updateData(Request $request , $user_id){
        if(!empty($user_id)){
        $add = UserModel::find($user_id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required'
        ]);
        $add->name = $request->name;
        $add->email = $request->email;
        $add->number = $request->number;
        $add->save();
            return redirect('/');
         }
         else{
            return redirect('/');
         }
    }

    public function editData(Request $request , $user_id){
        if(!empty($user_id)){
           $data = UserModel::find($user_id);
           $all = compact('data');
           return view('edit')->with($all);
           exit;
        }else{
            return redirect('/');
        }
       return redirect('/');
    }

    public function delete($user_id){
         $data = UserModel::find($user_id);
         $data->delete();
         return redirect('/');
    }
}
