@extends('layouts.admin')
@section('content')

  <div class="content-wrapper" style="margin-left: 0px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('category.index')}}">Category Table</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">



<div class="card card-primary" style="width: 100%;">
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <div class="card-header">
        <h3 class="card-title">Add Category</h3>
    </div>
             
    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="card-body">
          <div class="row">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  value="{{old('name')}}" name="name" placeholder="Enter name">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Slug</label>
                <input type="text" class="form-control" id="slug" value="{{old('slug')}}" name="slug" placeholder="Enter Slug">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Icon</label>
                <input type="text" class="form-control" id="icon" value="{{old('icon')}}" name="icon" placeholder="Enter Icon">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Mobile Icon</label>
                
                <input type="text" class="form-control" id="mobile_icon" value="{{old('mobile_icon')}}" name="mobile_icon" placeholder="Enter Mobile Icon">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" id="" class="form-control">
                <option value="" disabled selected>Select Status</option>

                  <option value="1">Active</option>
                  <option value="0">InActive</option>

                </select>            
              </div>
              <div class="form-group col-6">
                <label for="exampleInputEmail1">Category</label>
                <select name="sub_category" id="" class="form-control">
                <option value="" disabled selected>Select Category</option>
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>            
              </div>
            <div class="form-group col-6">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" value="{{old('name')}}" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                </div>

                            </div>
                        </div>
           
            </div>
           
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
        </div>

      </div>
    </section>
  </div>
@endsection
