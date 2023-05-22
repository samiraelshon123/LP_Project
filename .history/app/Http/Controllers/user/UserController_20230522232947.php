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
   
    public function contact(){
        $socialMedia = SocialMedia::first();
        $governorates = Governorate::all();
        $categories = Category::all();
        return view('user.contact', compact('categories', 'governorates','socialMedia'));
    }
    public function storeContact(Request $request){
        $data = $request->validate([
            "full_name" => "required|string",
            "gender" => "required",
            "email" => "required|email",
            "mobile" => "required",
            "message" => "required|min:10"
        ]);
        ContactForm::create($data);
        session()->flash('add_message', 'Data has been added');
        return redirect()->back();
    }
}
