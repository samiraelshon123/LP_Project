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
        $categories = Category::all();
        $governorates = Governorate::all();
        $socialMedia = SocialMedia::first();
        return view('user.home', compact('categories', 'governorates','socialMedia'));
    }
   
}
