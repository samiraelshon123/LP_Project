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
        return view('admin.pages.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string', 
            'slug' => 'required|string',
            'page_content' => 'required|string',
            'status' => 'required|string',
            'page_builder_status' => 'required|string',
            'layout' => 'required|string',
            'sidebar_layout' => 'required|string',
            'navbar_variant' => 'required|string',
            'page_class' => 'required|string',
            'back_to_top' => 'required|string',
            'breadcrumb_status' => 'required|string',
            'footer_variant' => 'required|string',
            'widget_style' => 'required|string',
            'left_column' => 'required|string',
            'right_column' => 'required|string',
           
        ]);
       
       
        Page::create($data);
            session()->flash('add_message', 'Page has been added');

        return  redirect('admin/Page');
    }
    
    public function edit($id){
       
        $Page = Page::find($id);
        
        return view('admin.pages.edit', compact('Page'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'title' => 'required|string', 
            'slug' => 'required|string',
            'page_content' => 'required|string',
            'visibility' => 'required|string',
            'status' => 'required|string',
            'page_builder_status' => 'required|string',
            'layout' => 'required|string',
            'sidebar_layout' => 'required|string',
            'navbar_variant' => 'required|string',
            'page_class' => 'required|string',
            'back_to_top' => 'required|string',
            'breadcrumb_status' => 'required|string',
            'footer_variant' => 'required|string',
            'widget_style' => 'required|string',
            'left_column' => 'required|string',
            'right_column' => 'required|string',
           
        ]);
        $Page = Page::find($id);
       
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
