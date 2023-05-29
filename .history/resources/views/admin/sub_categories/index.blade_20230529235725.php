@extends('layouts.admin')
@section('content')
  <div class="content-wrapper" style="margin-left: 0px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SubCategory Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">SubCategory Table</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
    @if(session('add_message'))
           <h1 style="color: rgb(73, 208, 73); font-size: 20px">{{session('add_message')}}</h1>
        @endif
        @if(session('delete_message'))
           <h1 style="color: red; font-size: 20px">{{session('delete_message')}}</h1>
        @endif
        @if(session('edit_message'))
           <h1 style="color: rgb(73, 208, 73); font-size: 20px">{{session('edit_message')}}</h1>
        @endif
      <div class="container-fluid">
        
    <div class="card" style="width: 1230px;">

      <!-- /.card-header -->
      <div class="card-body" >
        <div class="card-footer">
          <a href="{{route('SubCategory.create')}}" class="btn btn-primary">Add SubCategory</a>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Status</th>
              <th>SubCategory</th>
              <th>Image</th>
              <th>Action</th> 
            </tr>
          </thead>
          <tbody>
            <tr>
                @foreach ($categories as $SubCategory)
                <tr>
                    <td>{{ $SubCategory->name }}</td>
                    <td>{{ $SubCategory->slug }}</td>
                    <td>{{ ($SubCategory->status == 0)? 'Active':  'InActive'  }}</td>
                    <td>{{ ($SubCategory->sub_SubCategory != null)? $SubCategory->sub_SubCategory : 'No SubCategory'  }}</td>
                    <td><img src= "{{ $SubCategory->image_for_web }}" style="width: 120px; height: 120px;" class="w-50p"/></td>
                    <td style="display: flex;border-bottom: none;">
                        <a class="mr-4" href="{{route('SubCategory.edit', $SubCategory->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{route('SubCategory.destroy', $SubCategory->id)}}" method="post">
                          @method('delete')
                          @csrf
                        <button type="submit" style="border: none;color: red;background: white;">
                            <i class="far fa-trash-alt"></i>
                        </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>    
    </section>
  </div>
 
  @endsection