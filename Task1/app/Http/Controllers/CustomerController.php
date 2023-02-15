<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
public function at(){
   $cus =Customer::all()->toArray();
   // $cus =Customer::all()->toJson();
    $cus=json_encode($cus);
    var_dump($cus);
echo gettype($cus);

    echo "<pre>";
   // dd($cus);	
  //  return $cus;    
}
    
}
