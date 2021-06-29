<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function about(){
        $names = ["Vĩnh","Võ","Nam"];
        return view('about')->with(['ten' => $names]);
    }
}
