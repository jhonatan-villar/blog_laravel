<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        Post::truncate();
        $post = new Post([
            'title' => 'Mi primer post',
            'excerpt' => 'Extracto de mi primer posti',
            'body'      => '<p> mi primer parraf</p>',
            'category_id'   => 1,
            'published_at'  => Carbon::now()
        ]);
        // $post->save();

        //   $post = new Post();
        //   $post->title  = 'Mi primer post';
        //   $post->excerpt    = 'Extracto de mi primer posti';
        //   $post->body   = '<p> mi primer parraf</p>';
        //   $post->published_at =Carbon::now();
        
        $post->save();
    }
}
