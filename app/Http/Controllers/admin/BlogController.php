<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $blogs = Blog::all();
       
        return view('admin.blogs.index', compact('blogs'));

    }
    public function create(){
    $categories = Category::all();
        return view('admin.blogs.create', compact('categories'));
    }
    public function store(Request $request)
    {
       
        $data = $request->all();
       
        if($request->has('image')) { // check if request has image and call trait function for Upload Image
            $data['image'] = uploadImage($request->file("image"), "/images/blogs");
        }
        $data['admin_id'] = auth()->user()->id;
        $blog = Blog::create($data);
        
        session()->flash('add_message', 'Blog has been added');

        return  redirect('admin/blog');
    }
    
    public function edit($id){

        $blog = Blog::find($id);
        $categories = Category::all();
        return view('admin.blogs.edit', compact('blog', 'categories'));
    }
    public function update(Request $request, $id){
        $data = $request->all();
        $blog = Blog::find($id);
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("slider"), "/assets/upload/blogs");
        }
        $blog->update($data);

        session()->flash('edit_message', 'Blog has been updated');
        return  redirect('admin/blog');

    }
    public function destroy($id){
        $blog = Blog::find($id);
        $blog->delete();
        session()->flash('delete_message', 'Blog has been deleted');
        return  redirect('admin/blog');
    }
}
