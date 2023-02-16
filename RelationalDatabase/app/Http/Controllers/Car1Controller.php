<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class Car1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//$cars =DB::table('car1s')->get();
//$cars =DB::table('car1s')->first();
//$cars =DB::table('car1s')->where('id',1)->first();

// $cars =DB::table('car1s')->where('id',3)->value('model');

//retriving of list of column value use plunck


// $cars =DB::table('car1s')->where('id','=','40')->pluck('model');
//$cars =DB::table('car1s')->where('id','<','40')->get();
//$cars =DB::table('car1s')->where('id','<','40')->pluck('model','name');

//chunking data
// DB::table('car1s')->orderBy('id')->chunk(5,function($car1){
// echo "he <br><br>";
// foreach($car1 as $c){
// echo $c->name;
// echo "<br>";
// }
// });

//$car1=DB::table('car1s')->count();

//Determining if records Exist

// if(DB::table('car1s')->where('id','=','40')->exists())
// {
//     dd('yes');
// }

//select method
// $cars =DB::table('car1s')->select('name','model')->get();




//dd($cars);



     //   return view('cars.index',['cars'=>$cars]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
