<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::truncate();
        Category::truncate();
        Post::truncate();


        $user = \App\Models\User::factory()->create();


        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies',
        ]);

        Post::create([
            'category_id' => $personal->id,
            'user_id' => $user->id,
            'slug' => 'my-first-post',
            'title' => 'My First Post',
            'excerpt' => 'Curabitur accumsan dapibus arcu.',
            'body' => 'Curabitur accumsan dapibus arcu. Phasellus in vulputate tellus, ac aliquet nunc. Vivamus euismod efficitur eros, at rutrum purus commodo at. Praesent risus mi, porta at ullamcorper non, interdum nec dui. Donec lobortis nibh nec nisi feugiat, quis iaculis libero interdum. Mauris fringilla magna quis iaculis venenatis. Nunc convallis nisl augue, eu rhoncus justo placerat eget. Duis sagittis congue ex, eu luctus nisi vehicula a. Sed et sapien ex. Cras commodo lacus sed orci vestibulum ultrices. Aliquam efficitur est vel augue suscipit porta. Suspendisse ut faucibus nulla, eget convallis libero. Quisque condimentum justo nec eros tincidunt congue. Aliquam venenatis, risus eu pretium dictum, nisi urna bibendum dolor, in molestie elit mauris hendrerit leo.',
        ]);

        Post::create([
            'category_id' => $work->id,
            'user_id' => $user->id,
            'slug' => 'my-second-post',
            'title' => 'My Second Post',
            'excerpt' => 'Curabitur accumsan dapibus arcu.',
            'body' => 'Curabitur accumsan dapibus arcu. Phasellus in vulputate tellus, ac aliquet nunc. Vivamus euismod efficitur eros, at rutrum purus commodo at. Praesent risus mi, porta at ullamcorper non, interdum nec dui. Donec lobortis nibh nec nisi feugiat, quis iaculis libero interdum. Mauris fringilla magna quis iaculis venenatis. Nunc convallis nisl augue, eu rhoncus justo placerat eget. Duis sagittis congue ex, eu luctus nisi vehicula a. Sed et sapien ex. Cras commodo lacus sed orci vestibulum ultrices. Aliquam efficitur est vel augue suscipit porta. Suspendisse ut faucibus nulla, eget convallis libero. Quisque condimentum justo nec eros tincidunt congue. Aliquam venenatis, risus eu pretium dictum, nisi urna bibendum dolor, in molestie elit mauris hendrerit leo.',
        ]);
    }
}
