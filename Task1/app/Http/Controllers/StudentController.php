<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    public function test(){

      //  dd($request);
       // return view('ResultMethod');
// return response()->view('ResultMethod')->header(
//     'Content-Type', 'text/plain'
// );m

return view('ResultMethod');

    }
}
