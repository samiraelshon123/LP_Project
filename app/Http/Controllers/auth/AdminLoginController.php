<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
class AdminLoginController extends Controller
{

    public function loginPage(){
        return view('user.auth.admin_login');
    }

    public function loginAdmin(Request $request){

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){

            return redirect('admin');

        }else{

            return back();
        }
    }
}
