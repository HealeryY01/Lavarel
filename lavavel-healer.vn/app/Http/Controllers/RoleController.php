<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    //
    function show()
    {
        // $users = Role::find(4)
        //     ->users;
        // return $users;

        $roles = User::find(5)
            ->roles;
        return $roles;
    }
}
