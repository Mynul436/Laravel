<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function login(Request $req){
       // $data = new User;
        $data = $req->input();
       // $data->save();
        return response()->json($data);   
    }
}
