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
        $cities = Ar::all();
      
        return view('admin.cities.index', compact('cities'));

    }
    public function create(){
        $cities = Ar::all();
        return view('admin.cities.create',compact('cities'));
    }
    public function store(Request $request)
    {
       

        $data = $request->validate([
            'name' => 'required|string|min:3',
           
            'status' => 'required',
           
        ]);
       
        Ar::create($data);
            session()->flash('add_message', 'Ar has been added');

        return  redirect('admin/Ar');
    }
    
    public function edit($id){
      
        $Ar = Ar::find($id);
       
        return view('admin.cities.edit', compact('Ar'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'status' => 'required',
           
        ]);
      
        $Ar = Ar::find($id);
       
        $Ar->update($data);
        session()->flash('edit_message', 'Ar has been updated');
        return  redirect('admin/Ar');

    }
    public function destroy($id){
        $Ar = Ar::find($id);
        $Ar->delete();
        session()->flash('delete_message', 'Ar has been deleted');
        return  redirect('admin/Ar');
    }
}
