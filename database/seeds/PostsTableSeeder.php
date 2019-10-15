<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Administrator';
        $user->email = 'admin@apollo11.com';
        $user->password = Hash::make('admin');
        $user->email_verified_at = now();
        $user->role = 'ADMIN';
        $user->save();
    


        $category = New Category;
        $category->name = 'General';
        $category->save();

        $category = new Category;
        $category->name = 'Sport';
        $category->save();

        $category = new Category;
        $category->name = 'Entertainment';
        $category->save();



        $post = new Post;
        $post->title = 'สวัสดีชาวโลก';
        $post->detail = 'นี่คือโพสต์แรกของคุณ';
        $post->view_count = 0;
        $post->category_id = 1;
        $post->user_id = $user->id;
        $post->save();

        factory(Post::class, 20)->create([
            'category_id' => mt_rand(1, 3),
            'user_id' => $user->id
        ]);
        factory(Post::class, 10)->state('popular')->create([
            'category_id' => mt_rand(1, 3),
            'user_id' => $user->id
        ]);
    }
}
