@extends('layouts.admin')
@section('content')

  <div class="content-wrapper" style="margin-left: 0px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('Page.index')}}">Page Table</a></li>
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
        <h3 class="card-title">Add Page</h3>
    </div>
             
    <form action="{{route('Page.store')}}" method="POST" enctype="multipart/form-data">
        @csrf


        <div class="card-body">
          <div class="row">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  value="{{old('title')}}" name="title" placeholder="Enter title">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">visibility</label>
                <input type="text" class="form-control" id="visibility" value="{{old('visibility')}}" name="visibility" placeholder="Enter visibility">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">page_builder_status</label>
                <input type="text" class="form-control" id="page_builder_status" value="{{old('page_builder_status')}}" name="page_builder_status" placeholder="Enter page_builder_status">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">layout</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  value="{{old('layout')}}" name="layout" placeholder="Enter layout">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">visibility</label>
                <input type="text" class="form-control" id="visibility" value="{{old('visibility')}}" name="visibility" placeholder="Enter visibility">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">page_builder_status</label>
                <input type="text" class="form-control" id="page_builder_status" value="{{old('page_builder_status')}}" name="page_builder_status" placeholder="Enter page_builder_status">
            </div>
           
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" id="" class="form-control">
                <option value="" disabled selected>Select Status</option>

                  <option value="1">Active</option>
                  <option value="0">InActive</option>

                </select>            
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
