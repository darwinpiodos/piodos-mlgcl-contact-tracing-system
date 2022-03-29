<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserListController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->select('id','name','email','phone','profile_picture')->get();

        return view('userlist')->with('users', $users);
    }

}



