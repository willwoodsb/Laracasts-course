<?php
namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Alberto Balsalm'
        ]);
        Post::factory(4)->create([
            'user_id' => $user->id
        ]);
        Post::factory(4)->create();
        Post::factory(4)->create(['category_id' => 2]);
        Post::factory(7)->create(['category_id' => 3]);
        Post::factory(3)->create(['category_id' => 5]);
    }
}
