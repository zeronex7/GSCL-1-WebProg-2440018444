<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function index(){
        $angkaRandom = rand(10,50);
        // redirect()
        return view('content',['random' => $angkaRandom]);
    }

}
