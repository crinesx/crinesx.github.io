<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function index($id=null){
        return view('index');
    }

    function show($id){
        if ($id==null)
            $id=1;

        return view('mobil',compact('id'));
    }
}
