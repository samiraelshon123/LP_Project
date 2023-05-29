@extends('layouts.admin')
@section('content')
  <div class="content-wrapper" style="margin-left: 0;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('blog.index')}}">Blog Table</a></li>
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
        <h3 class="card-title">Edit Blog</h3>
    </div>

    <form action="{{route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="card-body">
        <div class="row">
        <div class="form-group col-6">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('title', $blog->title)}}" name="title" placeholder="Enter Title">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Slug</label>
                <input type="text" class="form-control" id="slug" value="{{old('slug', $blog->slug)}}" name="slug" placeholder="Enter Slug">
            </div>
           
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Visibility</label>
                <input type="text" class="form-control" id="visibility" value="{{old('visibility', $blog->visibility)}}" name="visibility" placeholder="Enter Visibility">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Featured</label>
                <input type="text" class="form-control" id="featured" value="{{old('featured', $blog->featured)}}" name="featured" placeholder="Enter Featured">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Status</label>
                <input type="text" class="form-control" id="status" value="{{old('status', $blog->status)}}" name="status" placeholder="Enter Status">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Tag Name</label>
                <input type="text" class="form-control" id="tag_name" value="{{old('tag_name', $blog->tag_name)}}" name="tag_name" placeholder="Enter Tag Name">
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Schedule Date</label>
                <input type="date" class="form-control" id="tag_name"  name="schedule_date" >
            </div>
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Category</label>
                <select name="category_id" id="" class="form-control">
                  <option value="">Select Category</option>
                  @foreach($categories as $category)
                    <option value="{{$category->name}}">{{$category->name}}</option>
                  @endforeach
                </select>            
              </div>
             
           
            <div class="form-group col-6">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                </div>

                            </div>
            </div>

            <div class="form-group col-6">
                <label for="exampleInputEmail1">Blog Content</label>
                  <textarea class="form-control" id="blog_content" name="blog_content" cols="10" rows="3">{{old('blog_content', $blog->blog_content)}}</textarea>
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
