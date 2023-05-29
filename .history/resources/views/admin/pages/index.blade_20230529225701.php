@extends('layouts.admin')
@section('content')
  <div class="content-wrapper" style="margin-left: 0px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Page Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
              <li class="breadcrumb-item active">Page Table</li>
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
          <a href="{{route('Page.create')}}" class="btn btn-primary">Add Page</a>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Title</th>
              <th>Slug</th>
              <th>Status</th>
              <th>Action</th> 
            </tr>
          </thead>
          <tbody>
            <tr>
                @foreach ($pages as $Page)
                <tr>
                    <td>{{ $Page->title }}</td>
                    <td>{{ $Page->slug }}</td>
                    <td>{{ ($Page->status == 0)? 'Active':  'InActive'  }}</td>
                    <td style="display: flex;border-bottom: none;">
                        <a class="mr-4" href="{{route('Page.edit', $Page->id)}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{route('Page.destroy', $Page->id)}}" method="post">
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