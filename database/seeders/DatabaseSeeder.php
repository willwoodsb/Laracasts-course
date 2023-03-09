<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(30)->create();
        User::factory(1)->create([
            'username' => 'willwoodsb',
            'password' => 'password'
        ]);
        Category::factory(30)->create();
        Post::factory(70)->create();
        Comment::factory(100)->create();
    }
}
