<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    public function login(){
        return view('user.auth.login');
    }
    public function loginUser(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])){
            
            return redirect('/');
        }else{

            return back();
        }
    }
}
