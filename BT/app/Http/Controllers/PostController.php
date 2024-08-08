<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return $request->input();
    }
}
