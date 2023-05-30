<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{



  public function create()
  {
    //echo "sadf";
    return view('categories.create');
  }


  public function store(Request $request)
  {

    // dd($request->all());

//array_merge works on index and associative array
$alphabets =['a','b','c'];
$alphabetc=['A','B','C'];
$arraMerge=array_merge($alphabetc,$alphabets);
$arrayCombine=array_combine($alphabetc,$alphabets);
echo "<pre>";
print_r($arrayCombine);
echo "</pre>";


echo "<pre>";
print_r($arraMerge);
echo "</pre>";







   //array flip or array index value swap 
    $a = array(
      "Mynul" => 23,
      "Kanon" => 22,
      "Soad" => 19
    );

    $new_a = array_flip($a);
    echo "<pre>";
    print_r($new_a);
    echo "</pre>";

    $arrayFill = array_fill(3, 5, "Mynul");
    echo "<pre>";
    print_r($arrayFill);
    echo "</pre>";



    $fill = array("red", "green", "blue", "yellow", "brown");
    $testFill = array_fill_keys($fill, "Akash");

    echo "<pre>" . "<br>";

    print_r($testFill);
    echo "</pre>" . "<br>";


    $color = array("red", "green", "blue", "yellow", "brown");
    shuffle($color);

    echo $color[array_rand($color)];

    echo "<pre>";
    print_r($color);
    echo "</pre>";


    dd();

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    echo "<pre>";
    echo $_COOKIE["User"];
    echo "</pre>";
    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    return "ok";
  }
}