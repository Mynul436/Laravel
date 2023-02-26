<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $data = Product::all();

        return view('product',['products'=>$data]);
    }

public function detail($id){
     $data= product::find($id);
     return view('detail',['product'=>$data]);
}

public function search(Request $req){
    $data = Product::where('name', 'like', '%'.$req
    ->input('query').'%')->get();
    return view('search',['products'=>$data]);
}


public function addToCart(Request $req){
    if($req->session()->has('user')){
        $cart = new Cart;
        $cart->user_id = $req->session()->get('user')['id'];
        $cart->product_id = $req->product_id;
        $cart->save();
        return redirect('/');
    }else{
        return redirect('/login');
    }
  
}

public static function  cartItem(){
    // $userId ::get('user')['id'];   
    // return Cart::where('user_id',$userId)->count();
   
$userId =Session::get('user')['id'];
return Cart::where('user_id',$userId)->count();
}
//     $products = DB::table('cart')
//     ->join('products','cart.product_id','=','products.id')
//     ->where('cart.user_id',$userId)
//     ->select('products.*','cart.id as cart_id')
//     ->get();
//     return view('cartlist',['products'=>$products]);
 

     function  cartList()
    {
$userId=Session::get('user')['id'];
$products= DB::table('carts')
 ->join('products','carts.product_id','=','products.id')
 ->where('carts.user_id',$userId)
 ->select('products.*','carts.id as cart_id')
 ->get();

 return view('cartlist',['products'=>$products]);
 }
 function removeCart($id)
 {
     Cart::destroy($id);
     return redirect('cartList');
 }
     function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total = $products= DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        $req->input();
        return redirect('/');
    }	

    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('myorders',['orders'=>$orders]);
    }

    public function register(Request $req)
    {
        $user = new User;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = $req->input('password');
        $user->save();
        return redirect('login');
    }

/**
     * Show the form for creating a new resource.
     */
}