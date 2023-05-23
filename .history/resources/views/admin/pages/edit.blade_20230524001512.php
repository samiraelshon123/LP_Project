@extends('layouts.admin')
@section('content')
  <div class="content-wrapper" style="margin-left: 0;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('Page.index')}}">Page Table</a></li>
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
        <h3 class="card-title">Edit Page</h3>
    </div>

    <form action="{{route('Page.update', $Page->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="card-body">
        <div class="row">
        <div class="form-group col-6">
                <label for="exampleInputEmail1">title</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  value="{{old('title', $Page->)}}" name="title" placeholder="Enter title">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">visibility</label>
                <input type="text" class="form-control" id="visibility" value="{{old('visibility', $Page->)}}" name="visibility" placeholder="Enter visibility">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">page_builder_status</label>
                <input type="text" class="form-control" id="page_builder_status" value="{{old('page_builder_status', $Page->)}}" name="page_builder_status" placeholder="Enter page_builder_status">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">layout</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  value="{{old('layout', $Page->)}}" name="layout" placeholder="Enter layout">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">sidebar_layout</label>
                <input type="text" class="form-control" id="sidebar_layout" value="{{old('sidebar_layout', $Page->)}}" name="sidebar_layout" placeholder="Enter sidebar_layout">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">navbar_variant</label>
                <input type="text" class="form-control" id="navbar_variant" value="{{old('navbar_variant', $Page->)}}" name="navbar_variant" placeholder="Enter navbar_variant">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">page_class</label>
                <input type="text" class="form-control" id="page_class" value="{{old('page_class', $Page->)}}" name="page_class" placeholder="Enter page_class">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">back_to_top</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  value="{{old('back_to_top', $Page->)}}" name="back_to_top" placeholder="Enter back_to_top">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">breadcrumb_status</label>
                <input type="text" class="form-control" id="breadcrumb_status" value="{{old('breadcrumb_status', $Page->)}}" name="breadcrumb_status" placeholder="Enter breadcrumb_status">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">footer_variant</label>
                <input type="text" class="form-control" id="footer_variant" value="{{old('footer_variant', $Page->)}}" name="footer_variant" placeholder="Enter footer_variant">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">widget_style</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  value="{{old('widget_style', $Page->widget_style)}}" name="widget_style" placeholder="Enter widget_style">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">left_column</label>
                <input type="text" class="form-control" id="left_column" value="{{old('left_column', $Page->left_column)}}" name="left_column" placeholder="Enter left_column">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">right_column</label>
                <input type="text" class="form-control" id="right_column" value="{{old('right_column', $Page->right_column)}}" name="right_column" placeholder="Enter right_column">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">page_content</label>
                <textarea name="" id="" cols="30" rows="3" name="page_content" >{{old('page_content', $Page->page_content)}}</textarea>            
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
