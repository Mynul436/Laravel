<?php

namespace App\Http\Controllers;

use App\Models\Parentcategory;
use Illuminate\Http\Request;

class UserCategoryAccessController extends Controller
{
    //

    public function show_accessable_category(){
        $pcategory=new Parentcategory;
        $pcategory->all();
       // return $pcategory;
       return "helolo";
    }
}
