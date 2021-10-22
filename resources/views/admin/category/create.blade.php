@extends('layouts.admin')
@section('title')
Category Add
@endsection
@section('content')
<div class="container-fluid mt-5">
   <!-- <div class="row">
      <div class="col-md-12">
         <h6>Collection / Category</h6>
      </div>
   </div> -->
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <!--Card content-->
            <div class="card-body">
               <h6 class="mb-0">
                  Collection / Add Category
                  <a href="{{url('category')}}" class="badge bg-success p-2 text-white float-right ml-2">BACK</a>
               </h6>
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-3">
      <div class="col-md-12">
         <div class="card">
           <!--  @if(session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
            </div>
            @endif -->
            <div class="card-body">
               <form action="{{url('category_store')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="row">
                      

                     <div class="col-md-6">
                        <div class="form-group @error('category_name') has-error @enderror">
                           <label for="">Name</label>
                           <input type="text" name="category_name" class="form-control" placeholder="Enter Name">
                           @error('category_name')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                     </div>
                     

                     <div class="col-md-12">
                        <div class="form-group">
                           <label for="">Description</label>
                           <textarea name="category_description" class="form-control" placeholder="Enter Description"></textarea>
                        </div>
                     </div>                        
                     
                     <div class="col-md-12">
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary">SAVE</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection