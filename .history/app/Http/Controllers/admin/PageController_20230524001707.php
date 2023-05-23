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
        $pages = Page::all();
      
        return view('admin.pages.index', compact('pages'));

    }
    public function create(){
        $pages = Page::all();
        return view('admin.pages.create',compact('pages'));
    }
    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|string' 
            'slug' => 'required|string'
            'page_content' => 'required|string'
            'visibility' => 'required|string'
            'status' => 'required|string'
            'page_builder_status' => 'required|string'
            'layout' => 'required|string'
            'sidebar_layout' => 'required|string'
            'navbar_variant' => 'required|string'
            'page_class' => 'required|string'
            'back_to_top' => 'required|string'
            'breadcrumb_status' => 'required|string'
            'footer_variant' => 'required|string'
            'widget_style' => 'required|string'
            'left_column' => 'required|string'
            'right_column' => 'required|string'
           
        ]);
        $data['sub_Page'] = $request->sub_Page;
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/pages");
        }
        if($request->has('mobile_icon')) { 
            $data['mobile_icon'] = uploadImage($request->file("mobile_icon"), "/images/pages");
        }
       
        Page::create($data);
            session()->flash('add_message', 'Page has been added');

        return  redirect('admin/Page');
    }
    
    public function edit($id){
        $pages = Page::all();
        $Page = Page::find($id);
        
        return view('admin.pages.edit', compact('Page', 'pages'));
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
            $data['image'] = uploadImage($request->file("image"), "/images/pages");
        }
        if($request->has('mobile_icon')) { 
            $data['mobile_icon'] = uploadImage($request->file("mobile_icon"), "/images/pages");
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
