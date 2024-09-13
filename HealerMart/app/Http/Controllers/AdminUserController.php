<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    //
    function list()
    {
        $users = User::paginate(1);

        return view('admin.user.list', compact('users'));
    }
}
