<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('pages/test');
    }
    
    public function show($id){
        $nilai = "mas ". $id;
        return view('pages/single', ['username' => $nilai]);
    }
}
