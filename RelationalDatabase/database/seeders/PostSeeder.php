<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker =Faker::create();

        $author=new Author();
$i=1;
        for($i;$i<1000;$i++){

$author=Author::find($i);

}

for($ii=0;$ii<100;$ii++){
$post=new Post();
$post->title=$faker->title();
$post->cat=$faker->address();
$author->post()->save($post);
    }
}
}