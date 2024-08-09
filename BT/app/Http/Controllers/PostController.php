<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    function add()
    {
        return view('post.create');
    }


    function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:100|min:5',
                'content' => 'required'
            ],
            [
                'required' => ' :attribute không được để trống',
                'min' => ' :attribute có độ dài ít nhất :min ký tự',
                'max' => ':attibute có độ dài tối da :max ký tự'
            ],
            [
                'title' => 'Tiêu đề',
                'content' => 'Nội dung'
            ]
        );
        $input = $request->all();
        if ($request->hasFile('file')) {
            $file = $request->file;
            //Lấy tên file
            $filename = $file->getClientOriginalName();
            //Lấy đuôi file
            echo $file->getClientOriginalExtension();
            //Lấy kích thước file
            echo $file->getsize();

            $file->move('public/uploads', $file->getClientOriginalName());
            $thumbnail = 'public/uploads/' . $filename;

            $input['thumbnail'] = $thumbnail;
        }
        $input['user_id'] = 1;
        Post::create($input);
        // return redirect('post/show');

        return redirect()->route('post.show');
    }



    function show()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }
}
