<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('CheckAge')->only('index', 'show');
        $this->middleware('CheckAge')->except('show');
        $this->middleware('auth');
    }
    function index()
    {
        return view('admin');
    }
    function show()
    {

        return view('admin');
    }

    function dashboard()
    {
        $users = Auth::user();
        return $users->role->name;
        // return $users;
        // return "OK";
    }
}
