<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UserListController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->select('id','name','email','phone','profile_picture','secondaryphone','landlinephone','gender','dmonth','dday','dyear','province','city_municipality','zipcode','barangay','c_address')->get();

        // $users =DB::where('id',$id)->first();
        
        return view('adminlist')->with('users', $users); 
        
    }


    public function deletedata($id)
    {
        $deletedata=User::find($id);
        $deletedata->delete();
        echo "Delete data";

    }


    
   


}



