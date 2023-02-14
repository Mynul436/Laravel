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
        return [
            //
             'accessable_category'=>[
                'customer_id'=>Customer::all()->random()->id,
                'category_id'=>Category::all()->random()->id]

        ];
}


}