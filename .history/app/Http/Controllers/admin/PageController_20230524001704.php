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
            'title' => 'required|str' 
            'slug' => 'required|str'
            'page_content' => 'required|str'
            'visibility' => 'required|str'
            'status' => 'required|str'
            'page_builder_status' => 'required|str'
            'layout' => 'required|str'
            'sidebar_layout' => 'required|str'
            'navbar_variant' => 'required|str'
            'page_class' => 'required|str'
            'back_to_top' => 'required|str'
            'breadcrumb_status' => 'required|str'
            'footer_variant' => 'required|str'
            'widget_style' => 'required|str'
            'left_column' => 'required|str'
            'right_column' => 'required|str'
           
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
