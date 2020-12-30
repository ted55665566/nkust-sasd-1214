<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayListController extends Controller
{
    public function index() {
        $data = \App\Models\PlayList::all();
        return view("lists", compact('data'));
    }
}