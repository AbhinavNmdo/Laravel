<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    // function show(){
    //     $data=["abhay", "ashu", "papa", "mummy"];
    //     return view('user', ["users"=>$data]);
    // }

    // function getData(Request $req){
    //     return $req->input();
    // }

    function index(){
        return DB::select("select * from users");
    }
}
