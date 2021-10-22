@extends('layouts.admin')
@section('title')
Category
@endsection
@section('content')
    <div class="container-fluid mt-5">
    	<!-- Heading -->
  <div class="row">
     <div class="col-md-12">
   <div class="card">
      <!--Card content-->
      <div class="card-body">
         <h6 class="mb-0">
            Collection / Category
           <a href="{{url('category_deleted_records')}}" class="badge bg-primary p-2 text-white float-right ml-2">Deleted Records</a>
            <a href="{{url('category_add')}}" class="badge bg-primary bg-primary p-2 text-white float-right">Add Category</a>
         </h6>         
      </div>
   </div>
   </div>
   </div>
   <!-- Heading -->

   <div class="row mt-3">
      <div class="col-md-12">
          <div class="card">
              @if(session('status'))
                  <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                  </div>
               @endif

               @if(session('danger'))
                  <div class="alert alert-danger" role="alert">
                     {{ session('danger') }}
                  </div>
               @endif

              <div class="card-body">
                 <table class="table table-striped table-bordered table-hover">
              <thead>
                  <th>ID</th>
                  <th>NAME</th>
                 
                  <th>DESCRIPTION</th>
                  
                  <th>ACTION</th>
              </thead>
              <tbody>
                @foreach($category as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->category_name }}</td>
                  
                  <td>{{ $item->category_description }}</td>
                 
                  <td><a href="{{url('category_edit/'.$item->id)}}" id="{{ $item->id }}" class="badge btn-warning">Edit</a>
                      <a href="{{url('category_delete/'.$item->id)}}" id="{{ $item->id }}" class="badge btn-danger">Delete</a>
                  </td>
                  </tr>
                 @endforeach 
              </tbody>
          </table>
              </div>
          </div>
      </div>
    </div>
<div class="float-right">{{$category->links()}}</div> 

   </div>
@endsection