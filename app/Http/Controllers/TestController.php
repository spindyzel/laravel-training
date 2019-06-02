<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Blog;
use App\Models\Member;

class TestController extends Controller
{
    public function index(){

        $members = Member::all();
        // dd($blogs);
        return view('pages/test' , ['members' => $members]);
    }
    
    public function show($id){
        $nilai = "id ". $id;

        // $users = [
        //     "Husni", "Budi", "Sapri"
        // ];
        // dd($users);
        // $unescaped = '<script>alert("x!")</script>';

        // GET
        // $users = DB::table('member')->where('username','like','%i%')->get();

        // INSERT
        // DB::table('member')->insert([
        //     ['username' => 'testing', 'password'=>'123']
        // ]);
        
        //UPDATE
        // DB::table('member')->where('username','123ajds')->update([
        //     'username' => 'tergantikan'
        // ]);
        
        //DELETE
        // DB::table('member')->where('id','>',5)->delete();

        // $users = DB::table('member')->get();

        //ELOQUENT DATABASE
        $member = Member::find($id);
        // dd($member);

        return view('pages/single', ['username' => $nilai , 'users' => $member]);
    }
}
