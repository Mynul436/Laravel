<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function add_customer(){
    $mobile=new Mobile();
    $mobile->model='samsung f23';
    $customer =new Customer();

     $customer->name='Mynul Islam';
     $customer->email='mynul@gmail.com';

     $customer->save();
     $customer->mobile()->save($mobile);    
}


public function show_mobile($id){
    $mob=Customer::find($id)->mobile;
    
    return $mob;
}
}