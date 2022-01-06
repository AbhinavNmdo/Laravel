<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function show(){
        $data=["abhay", "ashu", "papa", "mummy"];
        return view('user', ["users"=>$data]);
    }
}
