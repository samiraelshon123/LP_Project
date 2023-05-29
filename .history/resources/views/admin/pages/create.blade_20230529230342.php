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
                <label for="exampleInputEmail1">slug</label>
                <input type="text" class="form-control" id="slug" value="{{old('slug')}}" name="slug" placeholder="Enter slug">
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
                <label for="exampleInputEmail1" id="summernote">page_content</label>
                <textarea id="summernote"></textarea>              </div>

              
           
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

<script>
 
$(document).ready(function() {
   $('#summernote').summernote({
      height: 300, // set editor height
      minHeight: null, // set minimum height of editor
      maxHeight: null, // set maximum height of editor
      focus: true // set focus to editable area after initializing summernote
   });
});
</script>