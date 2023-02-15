<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Parentcategory;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserCategoryAccess>
 */
class UserCategoryAccessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $cat=Category::pluck('id')->random(30); 

        // return [
        //     //
        //     //  'accessable_category'=>[
        //     //     'customer_id'=>Customer::all()->random()->id,
        //     //     'category_id'=>Category::all()->random()->id]
        //     'accessable_category' => [$cat]

        // ];

        $category_id = Category::pluck('id')->random(20);
        return [
            
            'accessable_category'=>
                json_encode($category_id)
            
            
        ];
}


}