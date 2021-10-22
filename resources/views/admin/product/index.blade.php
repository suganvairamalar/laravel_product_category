@extends('layouts.admin')
@section('title')
Product
@endsection
@section('content')
<!-- Modal -->
<div class="modal fade" id="product_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{url('product_store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="">Category Id (Name)</label>
                        <select name="category_id" class="form-control">
                           <option value="">Select</option>
                           @foreach($category as $cateitem)
                           <option value="{{ $cateitem->id }}">{{ $cateitem->category_name }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group @error('product_name') has-error @enderror">
                        <label for="">Name</label>
                        <input type="text" name="product_name" class="form-control" placeholder="Enter Name">
                        @error('product_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                  </div>
                  
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="product_description" class="form-control" placeholder="Enter Description"></textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="product_image" class="form-control">
                        <!--  @error('name')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror -->
                     </div>
                  </div>                      
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn pmd-btn-raised pmd-ripple-effect btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn pmd-ripple-effect btn-primary">SAVE</button>
            </div>
         </form>
      </div>
   </div>
</div>
<div class="container-fluid mt-5">
   <!-- Heading -->
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <!--Card content-->
            <!--  @if(session('status'))
                  <div class="alert alert-success" role="alert">
                     {{ session('status') }}
                  </div>
               @endif -->
            <div class="card-body">
               <h6 class="mb-0">
                  Collection / Product
                  <a href="{{url('product_deleted_records')}}" class="badge bg-danger p-2 text-white float-right ml-2">Deleted Records</a>
                  <a href="#" data-toggle="modal" data-target="#product_Modal" class="badge bg-primary pmd-ripple-effect p-2 text-white float-right">Add Product</a>
               </h6>
            </div>
         </div>
      </div>
   </div>
   <!-- Heading -->
   <div class="row mt-3">
      <div class="col-md-12">
         <div class="card">          
            <div class="card-body">
                 @if(session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
            </div>
            @endif
               <table class="table table-striped table-bordered table-hover">
                  <thead>
                     <th>ID</th>
                     <th>NAME</th>
                     <th>CATEGORY NAME</th>
                     <th>IMAGE</th>
                     <th>SHOW/HIDE</th>
                     <th>ACTION</th>
                  </thead>
                  <tbody>
                     @foreach($product as $item)
                     <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->category->category_name }}
                        <td><img src="{{ asset('uploads/product_image/'.$item->product_image)}}" width="50px"></td>
                        <td><input type="checkbox" {{ $item->status == '1' ? 'checked':'' }}></td>
                        <td><a href="{{url('product_edit/'.$item->id)}}" id="{{ $item->id }}" class="badge btn-warning">Edit</a>
                           <a href="{{url('product_delete/'.$item->id)}}" id="{{ $item->id }}" class="badge btn-danger">Delete</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <div class="float-right">{{$product->links()}}</div> 
</div>
@endsection