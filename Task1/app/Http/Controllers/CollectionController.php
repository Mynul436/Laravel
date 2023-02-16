<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    //

    public function collection(){
    //     $collection = collect([1, 2, 3, 4, 5]);
    //     $collection->all();
    //     $collection->avg();
    //     $collection->chunk(2);
    //     $collection->collapse();
    //     $collection->combine([1, 2, 3, 4, 5]);
    //     $collection->contains(4);
    //     $collection->count();
    //     $collection->countBy();
    //     $collection->crossJoin([1, 2, 3]);
    //     $collection->dd();
    //     $collection->diff([1, 2, 3, 4, 5]);
    //     $collection->diffAssoc([1, 2, 3, 4, 5]);
    //     $collection->diffKeys([1, 2, 3, 4, 5]);
    //     $collection->dump();
    //     $collection->each(function ($item, $key) {
    //         //
    //     });
    //     $collection->every(function ($value, $key) {
    //         return true;
    //     });
    //     $collection->except([1, 2, 3, 4, 5]);
    //     $collection->filter(function ($value, $key) {
    //         return true;
    //     });
    //     $collection->first(function ($value, $key) {
    //         return true;
    //     });
    //     $collection->firstWhere('price', 100);
    //     $collection->flatMap(function ($value, $key) {
    //         return [1, 2, 3];
    //     });
    //     $collection->flatten();
    //     $collection->flip();
    //     $collection->forget(1);
    //     $collection->forPage(1, 15);
    //     $collection->get(1);
    //     $collection->groupBy('account_id');
    //     $collection->has(1);
    //     $collection->implode('product', ', ');
    //     $collection->intersect([1, 2, 3, 4, 5]);
    //     $collection->intersectByKeys([1, 2, 3, 4, 5]);
    //     $collection->isEmpty();
    //     $collection->isNotEmpty();
    //     $collection->keyBy('product_id');
    //     $collection->keys();
    //     $collection->last(function ($value, $key) {
    //         return true;
    //     });
    //     $collection->map(function ($item, $key) {
    //         return $item * 2;
    //     });
    //     $collection->mapInto(Product::class);

   // return "Anindo";

// $data=[12,23,34,45,56,67,78,89,90,100];
// $collection = collect($data)->avg();
// $data=['foo'=>10,'bar'=>20];	
// $collection = collect($data)->avg();
// $data=[12,23,34,45,56,67,78,89,90,100];

// $collection = collect($data)->chunk(2);

// $data=[[12,23,34],[45,56,67,78,89],90,[100]];
// $collection = collect($data)->collapse();
// $data=[[12,23,34],[45,56,67,78,89],90,[100]];
// $collection = collect($data)->count();
// $data=[[12,23,34]];
// $collection = collect($data)->countBy()->all();

// $data=[12,23,34];
//  $collection = collect($data)->crossJoin([1, 2, 3])->all();


// $data=[12,23,34];
// $collection = collect($data)->diff([1, 2, 3])->all();

// $data=[12,23,34];
// $collection = collect($data)->diff([12, 2, 3])->all();

// $data=collect([1, 2, 2, 2, 1]);
// $collection=$data->duplicates()->all();

// $data=collect([1, 2, 2, 2, 1]);
// $collection=$data->each(function ($item , $key) {
//     echo $item;
// })->all();
// $collection=collect([1, 2, 3, 4])
// ->every(function ($value, $key) {
//       return $value > 2;
//   });
//   return    collect([1, 2, 3, 4,"Anindo"])
//   ->filter(function ($value, $key) {
//         return $value > 2;});
//return $collection;

// $data=[['name'=>'Ani','age'=>20],
// ['name'=>'Anindo','age'=>21],
// ['name'=>'Anindya','age'=>22]];

// $collection=collect($data)->pluck('name')->all();

// $data=[1,2,3,4,5,6,7,8,9,10];
// $collection=collect($data)->pop(5);

// return $data;

$collection = collect([1, 2, 3, 4, 5]);
 
$collection->pop(3);
 
// collect([5, 4, 3])
 
$collection->all();
 
// [1, 2]

return $collection;


      }
}
