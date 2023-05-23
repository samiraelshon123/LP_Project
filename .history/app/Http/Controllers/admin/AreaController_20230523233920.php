<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $cities = A::all();
      
        return view('admin.cities.index', compact('cities'));

    }
    public function create(){
        $cities = A::all();
        return view('admin.cities.create',compact('cities'));
    }
    public function store(Request $request)
    {
       

        $data = $request->validate([
            'name' => 'required|string|min:3',
           
            'status' => 'required',
           
        ]);
       
        A::create($data);
            session()->flash('add_message', 'A has been added');

        return  redirect('admin/A');
    }
    
    public function edit($id){
      
        $A = A::find($id);
       
        return view('admin.cities.edit', compact('A'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'status' => 'required',
           
        ]);
      
        $A = A::find($id);
       
        $A->update($data);
        session()->flash('edit_message', 'A has been updated');
        return  redirect('admin/A');

    }
    public function destroy($id){
        $A = A::find($id);
        $A->delete();
        session()->flash('delete_message', 'A has been deleted');
        return  redirect('admin/A');
    }
}
