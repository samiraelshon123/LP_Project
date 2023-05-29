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
        $categories = Category::all();
        return view('admin.SubCategory.create',compact('categories'));
    }
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string|min:3',
            'slug' => 'required|string',
            'category_id' => 'required',
            'status' => 'required',
           
        ]);
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/SubCategory");
        }
        if($request->has('mobile_icon')) { 
            $data['mobile_icon'] = uploadImage($request->file("mobile_icon"), "/images/SubCategory");
        }
       
        SubCategory::create($data);
            session()->flash('add_message', 'SubCategory has been added');

        return  redirect('admin/SubCategory');
    }
    
    public function edit($id){
        $categories = SubCategory::all();
        $SubCategory = SubCategory::find($id);
        
        return view('admin.SubCategory.edit', compact('SubCategory', 'categories'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'slug' => 'required|string',
            'category_id' => 'required',
            'status' => 'required',
           
        ]);
        $SubCategory = SubCategory::find($id);
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/SubCategory");
        }
        if($request->has('mobile_icon')) { 
            $data['mobile_icon'] = uploadImage($request->file("mobile_icon"), "/images/SubCategory");
        }
        $SubCategory->update($data);
        session()->flash('edit_message', 'SubCategory has been updated');
        return  redirect('admin/SubCategory');

    }
    public function destroy($id){
        $SubCategory = SubCategory::find($id);
        $SubCategory->delete();
        session()->flash('delete_message', 'SubCategory has been deleted');
        return  redirect('admin/SubCategory');
    }
}
