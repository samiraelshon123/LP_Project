<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $categories = City::all();
      
        return view('admin.categories.index', compact('categories'));

    }
    public function create(){
        $categories = City::all();
        return view('admin.categories.create',compact('categories'));
    }
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|min:3',
            'slug' => 'required|string',
            'icon' => 'required|string',
            'mobile_icon' => 'required|mimes:jpg,jpeg,png',
            'status' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
           
        ]);
        $data['sub_city'] = $request->sub_city;
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/categories");
        }
        if($request->has('mobile_icon')) { 
            $data['mobile_icon'] = uploadImage($request->file("mobile_icon"), "/images/categories");
        }
       
        City::create($data);
            session()->flash('add_message', 'city has been added');

        return  redirect('admin/city');
    }
    
    public function edit($id){
      
        $city = City::find($id);
        
        return view('admin.categories.edit', compact('city'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'slug' => 'required|string',
            'icon' => 'required|string',
            'mobile_icon' => 'required|mimes:jpg,jpeg,png',
            'status' => 'required',
           
        ]);
        $data['sub_city'] = $request->sub_city;
        $city = City::find($id);
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/categories");
        }
        if($request->has('mobile_icon')) { 
            $data['mobile_icon'] = uploadImage($request->file("mobile_icon"), "/images/categories");
        }
        $city->update($data);
        session()->flash('edit_message', 'city has been updated');
        return  redirect('admin/city');

    }
    public function destroy($id){
        $city = City::find($id);
        $city->delete();
        session()->flash('delete_message', 'city has been deleted');
        return  redirect('admin/city');
    }
}
