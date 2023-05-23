<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index(){
        $cities = City::all();
      
        return view('admin.cities.index', compact('cities'));

    }
    public function create(){
        $cities = City::all();
        return view('admin.cities.create',compact('cities'));
    }
    public function store(Request $request)
    {
        dd($request->)

        $data = $request->validate([
            'name' => 'required|string|min:3',
           
            'status' => 'required',
           
        ]);
       
        City::create($data);
            session()->flash('add_message', 'city has been added');

        return  redirect('admin/city');
    }
    
    public function edit($id){
      
        $city = City::find($id);
        
        return view('admin.cities.edit', compact('city'));
    }
    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'status' => 'required',
           
        ]);
      
        $city = City::find($id);
       
        $city->update($data);
        session()->flash('edit_message', 'city has been updated');
        return  redirect('admin/city');

    }
    public function destroy($id){
        $city = City::find($id);
        $city->delete();
        session()->flash('delete_message', 'city has been deleted');
        return  redirect('admin/city');
    }
}
