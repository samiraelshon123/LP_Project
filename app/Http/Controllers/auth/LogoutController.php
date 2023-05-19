<?php

namespace App\Http\Controllers\auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
   public function logout(Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    $request->session()->flush('cart');
    $request->session()->flush('subTotal');
    $request->session()->flush('discount');
    $request->session()->flush('total');
    
    return view('user.auth.logout');
   }

}
