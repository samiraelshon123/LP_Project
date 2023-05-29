@extends('layouts.admin')
@section('content')
  <div class="content-wrapper" style="margin-left: 0;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('category.index')}}">Category Table</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">


<div class="card card-primary" style="width: 100%;" >
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
        <h3 class="card-title">Edit Category</h3>
    </div>

    <form action="{{route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="card-body">
        <div class="row">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" value="{{$category->name}}" id="exampleInputEmail1" name="name" placeholder="Enter name">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Slug</label>
                <input type="text" class="form-control" id="slug" value="{{old('slug', $category->slug)}}" name="slug" placeholder="Enter Slug">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Icon</label>
                <input type="text" class="form-control" id="icon" value="{{old('icon', $category->icon)}}" name="icon" placeholder="Enter Icon">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputFile">Mobile Icon</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mobile_icon" value="{{old('mobile_icon')}}" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                </div>

                            </div>
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" id="" class="form-control">
                <option value="" disabled selected>Select Status</option>

                  <option value="1" {{($category->status == 1)? 'selected': ''}}>Active</option>
                  <option value="0" {{($category->status == 0)? 'selected': ''}}>InActive</option>

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
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>
</div>
        </div>

      </div>
    </section>
  </div>
  @endsection
