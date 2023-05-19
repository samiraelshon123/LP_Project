<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $brands = Brand::all();
       
        return view('admin.brands.index', compact('brands'));

    }
    public function create(){
        return view('admin.brands.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'url' => 'required|url'
           
        ]);
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/brands");
        }
       
        Brand::create( $data);
            session()->flash('add_message', 'Brand has been added');

        return  redirect('admin/brand');
    }
    
    public function edit($id){

        $Brand = Brand::find($id);
        
        return view('admin.brands.edit', compact('Brand'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'title' => 'required|string',
            'url' => 'required|url'
           
        ]);
        $Brand = Brand::find($id);
        if($request->has('image')) { 
            $data['image'] = uploadImage($request->file("image"), "/images/brands");
        }
        $Brand->update($data);
        session()->flash('edit_message', 'Brand has been updated');
        return  redirect('admin/brand');

    }
    public function destroy($id){
        $Brand = Brand::find($id);
        $Brand->delete();
        session()->flash('delete_message', 'Brand has been deleted');
        return  redirect('admin/brand');
    }
}
