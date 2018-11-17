<?php

use Illuminate\Database\Seeder;
use App\Post;

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

        $post = new Post();
        $post->title = 'Post uno';
        $post->excerpt = 'Vista previa del post uno';
        $post->body = 'Contenido del post uno';
        $post->category_id = 1;
        $post->save();
    }
}
