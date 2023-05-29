<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $SubCategory = SubCategory::all();
      
        return view('admin.SubCategory.index', compact('SubCategory'));

    }
    public function create(){
        $SubCategory = Category::all();
        return view('admin.SubCategory.create',compact('SubCategory'));
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
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/SubCategory");
        }
        if($request->has('mobile_icon')) { 
            $data['mobile_icon'] = uploadImage($request->file("mobile_icon"), "/images/SubCategory");
        }
       
        Category::create($data);
            session()->flash('add_message', 'Category has been added');

        return  redirect('admin/category');
    }
    
    public function edit($id){
        $SubCategory = Category::all();
        $category = Category::find($id);
        
        return view('admin.SubCategory.edit', compact('category', 'SubCategory'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'slug' => 'required|string',
            'icon' => 'required|string',
            'mobile_icon' => 'required|mimes:jpg,jpeg,png',
            'status' => 'required',
           
        ]);
        $category = Category::find($id);
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/SubCategory");
        }
        if($request->has('mobile_icon')) { 
            $data['mobile_icon'] = uploadImage($request->file("mobile_icon"), "/images/SubCategory");
        }
        $category->update($data);
        session()->flash('edit_message', 'Category has been updated');
        return  redirect('admin/category');

    }
    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('delete_message', 'Category has been deleted');
        return  redirect('admin/category');
    }
}
