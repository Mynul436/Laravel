<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(1000)->create();

        User::factory()
        ->count(1000)
        ->has(Profile::factory())
        ->create()
        ->each(function ($user) {
            Post::factory()
                ->count(rand(0, 4))
                ->create(['user_id' => $user->id]);
        });
    
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->command->info('Database seeded successfully.');
    }
}
