<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    //
    function add()
    {
        DB::table('posts')->insert(
            ['title' => 'Post4', 'content' => 'Content4', 'user_id' => 5]
        );
    }
    function show()
    {
        // $posts = DB::table('posts')->select('title', 'content')->get();
        // foreach ($posts as $post) {
        //     echo $post->title;
        //     echo $post->content;
        //     echo "<br>";
        // }
        //     return $posts;


        // $posts = DB::table('posts')->where('id', 3)->first();
        // echo $posts->title;
        // echo $posts->content;
        // echo $posts->user_id;
        // print_r($posts);


        // $posts = DB::table('posts')->find(2);
        // echo $posts->title;
        // print_r($posts);


        // $number_posts = DB::table('posts')->where('user_id', 5)->count();
        // echo $number_posts;

        // $max = DB::table('posts')->max('user_id');
        // $min = DB::table('posts')->min('user_id');
        // $avg = DB::table('posts')->avg('user_id');
        // echo $max;
        // echo $min;
        // echo $avg;


        // $posts = DB::table('posts')
        //     ->join('users', 'users.id', '=', 'posts.user_id')
        //     ->select('users.name', 'posts.*')
        //     ->get();
        // print_r($posts);
        // return $posts;


        // $posts = DB::table('posts')
        //     ->where('title', 'Like', "%iphone%")
        //     ->get();


        // $posts = DB::table('posts')
        //     ->where(
        //         [
        //             ['title', 'like', '%iphone%'],
        //             ['votes', '>', 60]
        //         ]
        //     )
        //     ->get();


        // $posts = DB::table('posts')
        //     ->where('votes', '<', 20)
        //     ->orWhere('user_id', '=', 6)
        //     ->get();



        // $posts = DB::table('posts')
        //     ->selectRaw("count('id') as number_posts,user_id")
        //     ->groupBy('user_id')
        //     ->orderBy('number_posts',)
        //     ->get();

        // $posts = DB::table('posts')
        //     ->orderBy('votes', 'desc')
        //     ->get();


        // $posts = DB::table('posts')
        //     ->offset(2)
        //     ->limit(2)
        //     ->get();

        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";
    }

    function update($id)
    {
        DB::table('posts')
            ->where('id', $id)
            ->update([
                'title' => 'Macbook 2020',
                'votes' => 20
            ]);
    }


    function delete($id)
    {
        return  DB::table('posts')
            ->where('id', $id)
            ->delete();
    }

    function read()
    {
        // $posts = Post::all();
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";
        // return $posts;

        // $posts =  Post::where('title', 'like', '%iphone%')->get();
        // return $posts;

        $post = Post::where('user_id', 5)->first();
        return $post->title;
    }
}
