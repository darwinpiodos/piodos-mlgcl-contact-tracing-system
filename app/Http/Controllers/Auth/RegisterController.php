<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = ('/adminprofile');


    // protected function authenticated(Request $request, $user)
    // {

    //  return redirect('/adminprofile');
    // }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'profile_picture' => 'required|mimes:png,jpeg,jpg,gif',
            


            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {

    
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'phone' => $data['phone'],
    //         'password' => Hash::make($data['password']),
    //         'profile_picture' => $data['profile_picture'],

    //         'secondaryphone' => $data['secondaryphone'],
    //         'landlinephone' => $data['landlinephone'],
    //         'gender' => $data['gender'],
    //         'dmonth' => $data['dmonth'],
    //         'dday' => $data['dday'],
    //         'dyear' => $data['dyear'],
    //         'province' => $data['province'],
    //         'city_municipality' => $data['city_municipality'],
    //         'zipcode' => $data['zipcode'],
    //         'barangay' => $data['barangay'],
    //         'c_address' => $data['c_address'],



        

    //     ]);

        
    // }



    protected function create(array $data)
    {

    
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'profile_picture' => $data['profile_picture'],

            'secondaryphone' => $data['secondaryphone'],
            'landlinephone' => $data['landlinephone'],
            'gender' => $data['gender'],
            'dmonth' => $data['dmonth'],
            'dday' => $data['dday'],
            'dyear' => $data['dyear'],
            'province' => $data['province'],
            'city_municipality' => $data['city_municipality'],
            'zipcode' => $data['zipcode'],
            'barangay' => $data['barangay'],
            'c_address' => $data['c_address'],



        

        ]);


if (request()->hasfile('profile_picture')){
$profile_picture =request()->file('profile_picture')->getClientOriginalName();
request()->file('profile_picture')->storeAs('avatars',$user->id.'/'.$profile_picture,'');
$user->update(['profile_picture'=>$profile_picture]);
}

return $user;


        
    }

  

}
