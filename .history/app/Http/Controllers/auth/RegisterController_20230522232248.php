<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
class RegisterController extends Controller
{
    public function register(){
        return view('user.auth.register');
    }
    public function registerUser(Request $request){
        $data = $this->validate(request(),[
            'name' => 'required',
            'username' =
            'phone' => 'required',
            'email' => 'required|unique:users',
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'


        ],[],[]);
        $news = User::create( [

            'name' => request('name'),
            'phone' => request('phone'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),

        ]);
        return redirect('/');

    }
}
