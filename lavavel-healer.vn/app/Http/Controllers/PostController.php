<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    //
    function add()
    {
        #QUERY BUILDER
        // DB::table('posts')->insert(
        //     ['title' => 'Post4', 'content' => 'Content4', 'user_id' => 5]
        // );


        #ELOQUENT ORM
        // $post = new Post;

        // $post->title = "Laravel Pro 1";
        // $post->content = "Content Laravel pro 1";
        // $post->user_id = 6;
        // $post->votes = 20;
        // $post->save();

        // Post::create([
        //     'title' => 'Post 2',
        //     'content' => 'Content post',
        //     'user_id' => 6,
        //     'votes' => 37
        // ]);
        return view('post.create');
    }
    function show()
    {
        #QUERY BUILDER
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
        #QUERY BUILDER
        // DB::table('posts')
        //     ->where('id', $id)
        //     ->update([
        //         'title' => 'Macbook 2020',
        //         'votes' => 20
        //     ]);

        #ELOQUENT ORM
        // $post = Post::find($id);

        // $post->title = "Laravel Pro 2";
        // $post->content = "Content Laravel pro 1";
        // $post->user_id = 6;
        // $post->votes = 20;
        // $post->save();

        $post = Post::where('id', $id)->update([
            'title' => 'Update',
            'content' => 'Content update',
            'user_id' => 5,
            'votes' => 35
        ]);
    }


    function delete($id)
    {
        #QUERY BUILDER
        // return  DB::table('posts')
        //     ->where('id', $id)
        //     ->delete();

        #ELOQUENT ORM
        $post = Post::find($id);
        $post->delete();

        // Post::Where('user_id', 6)->delete();

        // Post::destroy($id);

        // return Post::destroy([8, 10]);
    }

    function read()
    {
        #ELOQUENT ORM
        // $posts = Post::all();
        // echo "<pre>";
        // print_r($posts);
        // echo "</pre>";
        // return $posts;

        // $posts =  Post::where('title', 'like', '%iphone%')->get();
        // return $posts;

        // $post = Post::where('user_id', 5)->first();

        // $post = Post::find(2);

        // $posts = Post::find([2, 5]);

        // $posts = Post::orderBy('votes', 'desc')->get();

        // $posts = Post::selectRaw("count('id') as number_posts,user_id")
        //     ->groupBy('user_id')
        //     ->orderBy('number_posts',)
        //     ->get();


        // $posts = Post::limit('2')
        //     ->offset('1')
        //     ->get();
        // return $posts;

        // $posts = Post::withTrashed()
        //     ->get();

        // $posts = Post::onlyTrashed()
        //     ->get();

        // return $posts;

        // $img = Post::find(2)
        //     ->FeaturedImages;
        // return $img;

        $user = Post::find(2)
            ->user;

        $posts = User::find(6)
            ->posts;
        return $posts;
    }

    function restore($id)
    {
        Post::onlyTrashed()
            ->where('id', $id)
            ->restore();
    }

    function permanentlyDelete($id)
    {
        Post::onlyTrashed()
            ->where('id', $id)
            ->forceDelete();
    }
}
