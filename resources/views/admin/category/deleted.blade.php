@extends('layouts.admin')
@section('title')
Category/Delete
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
            Collection / Category Deleted Records
           
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
              <div class="card-body">
                 <table class="table table-striped table-bordered table-hover">
              <thead>
                  <th>ID</th>
                  <th>NAME</th>
                 
                  <th>DESCRIPTION</th>
                
                  <th>SHOW/HIDE</th>
                  <th>ACTION</th>
              </thead>
              <tbody>
                @foreach($category as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->category_name }}</td>
                
                  <td>{{ $item->category_description }}</td>
                 
                  <td><input type="checkbox" {{ $item->status == '1' ? 'checked':'' }}></td>
                  <td><a href="{{url('category_deleted_restore/'.$item->id)}}" id="{{ $item->id }}" class="badge py-2 px-2 btn-danger">Re-Store</a>
                  </td>
                  </tr>
                 @endforeach 
              </tbody>
          </table>
              </div>
          </div>
   		</div>
   	</div>
    	
    </div>
@endsection