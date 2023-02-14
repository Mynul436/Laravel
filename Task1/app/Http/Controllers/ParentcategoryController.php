<?php

namespace App\Http\Controllers;

use App\Models\Parentcategory;
use Illuminate\Http\Request;

class ParentcategoryController extends Controller
{
    //
       
    
    public function add_parent_category(){
//insert
        $pcategory=new Parentcategory;
        $pcategory->name='random';

        $pcategoryall=Parentcategory::all();
return $pcategory;

   // $pcategory->save();


//update
//$pcategory=Parentcategory::find(1);
//$pcategory->delete();

//$pcategory->name='Random';
//$pcategory->save();

//mass update
//Parentcategory::where('name','Random')->update(['name'=>'random again']);

//Parentcategory::updateOrCreate(['name'=>'Random again']);
        //return "asdf";

    }



}
