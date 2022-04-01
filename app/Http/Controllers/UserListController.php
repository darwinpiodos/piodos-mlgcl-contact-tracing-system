<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Model\User;

class UserListController extends Controller
{

    public function index()
    {
        $users = DB::table('users')->select('id','name','email','phone','profile_picture','secondaryphone','landlinephone','gender','dmonth','dday','dyear','province','city_municipality','zipcode','barangay','c_address')->get();



        // $users =DB::where('id',$id)->first();
        


        return view('adminlist')->with('users', $users); 
        
    }


    // public function store($id){

    //     return $id;


    // }

    // public function show($id){

    //     $users =User::where('id',$id)->first();
        
    //     return view('adminprofile',compact('id'));
    // }


    
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'profile_picture' => 'required',
    //     ]);
    //     $input = $request->all();
    //     $file = $request->file('profile_picture');
    //     $input['profile_picture'] = $file->getClientOriginalName();
    //     $file->move(public_path('upload'),$file->getClientOriginalName());
    //     File::create(['profile_picture' => $input['profile_picture']]);
        
    //     return redirect()->back()->with('users', 'success Full file upload');;

    // }



}



