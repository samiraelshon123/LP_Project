@extends('layouts.admin')
@section('content')
  <div class="content-wrapper" style="margin-left: 0;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Area</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('Area.index')}}">Area Table</a></li>
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
        <h3 class="card-title">Edit Area</h3>
    </div>

    <form action="{{route('Area.update', $Area->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('put')
        <div class="card-body">
        <div class="row">
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" value="{{$Area->name}}" id="exampleInputEmail1" name="name" placeholder="Enter name">
            </div>
           
            <div class="form-group col-6">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" id="" class="form-control">
                <option value="" disabled selected>Select Status</option>

                  <option value="1" {{($Area->status == 1)? 'selected': ''}}>Active</option>
                  <option value="0" {{($Area->status == 0)? 'selected': ''}}>InActive</option>

                </select>            
              </div>
              <div class="form-group col-6">
                <label for="exampleInputEmail1">Status</label>
                <select name="city_id" id="" class="form-control">
                <option value="" disabled selected>Select City</option>
                @foreach($cities as city)
                  <option value="{{city->id}}">{{city->name}}</option>
                @endforeach
                </select>            
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
