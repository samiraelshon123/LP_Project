<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\ContactForm;
use App\Models\Governorate;
use App\Models\Place;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
      
        return view('user.home');
    }
    public function categories(){
        $categories = Category::all();
        // dd($categories);
        return view('user.categories', compact('categories'));
    }
    public function home(){
      
        return view('user.home');
    }
   
}
