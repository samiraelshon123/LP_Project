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
    public function categories(){
        $categories = Category::all();
        // dd($categories);
        return view('user.categories', compact('categories'));
    }
    public function about_us(){
      
        return view('user.about_us');
    }
    public function change_location(){
      
        return view('user.change_location');
    }
    public function contact_us(){
      
        return view('user.contact_us');
    }
    public function faq(){
      
        return view('user.faq');
    }
    public function privacy(){
      
        return view('user.privacy');
    }
    public function terms_of_use(){
      
        return view('user.terms_of_use');
    }
    public function service_details(){
      
        return view('user.service_details');
    }
    public function services_by_category(){
      
        return view('user.services_by_category');
    }
   
}
