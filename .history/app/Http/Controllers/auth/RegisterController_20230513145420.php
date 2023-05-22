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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',


        ],[],[]);
        $news = User::create( [

            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),

        ]);
        return redirect('/');

    }
}
