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
        // User::factory(10)->create();
        User::truncate();
        Category::truncate();
        Post::truncate();
        $user=User::factory()->create([
            "name"=> "yolyolyol",
        ]);
        Post::factory(5)->create([
            "user_id"=> $user->id
        ]);
        

        /*
        $user = User::factory()->create();
        $family = Category ::create([
            'name'=> 'Family',
            'slug'=> 'family',
        ]);
        $work= Category ::create([
            'name'=> 'work',
            'slug'=> 'work',
        ]);
        $fann= Category ::create([
            'name'=> 'Fann',
            'slug'=> 'fann',
        ]);

        Post ::create([
            'user_id'=> $user->id,
            'category_id'=> $family->id,
            'title'=> 'My Family Post',
            'slug'=> 'my first post',
            'excerpt'=> 'Bla bla excerpt',
            'body'=> '<p>This is a paaragraph to test if the body of the post is working or not </p> ',
        ]);
        Post ::create([
            'user_id'=> $user->id,
            'category_id'=> $fann->id,
            'title'=> 'My Fann Post',
            'slug'=> 'my Second post',
            'excerpt'=> 'Bla bla excerpt',
            'body'=> '<p>This is a paaragraph to test if the body of the post is working or not </p>',
        ]);
        Post ::create([
            'user_id'=> $user->id,
            'category_id'=> $work->id,
            'title'=> 'My work Post',
            'slug'=> 'my third post',
            'excerpt'=> 'Bla bla excerpt',
            'body'=> '<p>This is a paaragraph to test if the body of the post is working or not </p> ',
        ]);*/
    }
}
