<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $cities = Area::all();
      
        return view('admin.cities.index', compact('cities'));

    }
    public function create(){
        $cities = Area::all();
        return view('admin.cities.create',compact('cities'));
    }
    public function store(Request $request)
    {
       

        $data = $request->validate([
            'name' => 'required|string|min:3',
           
            'status' => 'required',
           
        ]);
       
        Area::create($data);
            session()->flash('add_message', 'Area has been added');

        return  redirect('admin/Area');
    }
    
    public function edit($id){
      
        $Area = Area::find($id);
       
        return view('admin.cities.edit', compact('Area'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'status' => 'required',
           
        ]);
      
        $Area = Area::find($id);
       
        $Area->update($data);
        session()->flash('edit_message', 'Area has been updated');
        return  redirect('admin/Area');

    }
    public function destroy($id){
        $Area = Area::find($id);
        $Area->delete();
        session()->flash('delete_message', 'Area has been deleted');
        return  redirect('admin/Area');
    }
}
