<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Parentcategory;
use App\Models\Post;
use App\Models\Product;
use App\Models\User;
use App\Models\UserCategoryAccess;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

// Parentcategory::factory(10)
// ->has(Category::factory()
// ->has(Product::factory()->count(40))
// ->count(50))->create();


// for($i=1;$i<=10;$i++){
//     Customer::factory($i)->has(UserCategoryAccess::factory()
//     ->count(1))->create();
// }
// Customer::factory(1)->has(UserCategoryAccess::factory()
// ->count(10))->create();


 User::factory(10)->create();
 Post::factory(10)->create();
Comment::factory(10)->create();
    

}
}
