<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $categories = Page::all();
      
        return view('admin.categories.index', compact('categories'));

    }
    public function create(){
        $categories = Page::all();
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
        $data['sub_Page'] = $request->sub_Page;
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/categories");
        }
        if($request->has('mobile_icon')) { 
            $data['mobile_icon'] = uploadImage($request->file("mobile_icon"), "/images/categories");
        }
       
        Page::create($data);
            session()->flash('add_message', 'Page has been added');

        return  redirect('admin/Page');
    }
    
    public function edit($id){
        $categories = Page::all();
        $Page = Page::find($id);
        
        return view('admin.categories.edit', compact('Page', 'categories'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'slug' => 'required|string',
            'icon' => 'required|string',
            'mobile_icon' => 'required|mimes:jpg,jpeg,png',
            'status' => 'required',
           
        ]);
        $data['sub_Page'] = $request->sub_Page;
        $Page = Page::find($id);
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/categories");
        }
        if($request->has('mobile_icon')) { 
            $data['mobile_icon'] = uploadImage($request->file("mobile_icon"), "/images/categories");
        }
        $Page->update($data);
        session()->flash('edit_message', 'Page has been updated');
        return  redirect('admin/Page');

    }
    public function destroy($id){
        $Page = Page::find($id);
        $Page->delete();
        session()->flash('delete_message', 'Page has been deleted');
        return  redirect('admin/Page');
    }
}
