<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Headlines;

class Maincontroller extends Controller
{
    //
    function index(){
        $titles = Headlines::all();
        return view("index",compact('titles'));
    }

    function insert(Request $req){
        
        $title = $req->input('title');
         
        $data = new Headlines;
        $data ->title = $title;
        $data ->save();
        
        return view("index",compact('titles'));

    }
    function logout(){
        Auth::logout();
        return redirect('/');
    }

    function delete($id){
       $data = Headlines::find($id);
       $data->delete();
       return redirect('/');
    }
}
