@extends('layouts.admin')
@section('title')
Product Edit
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
                  Collection / Edit - Product
                  <a href="{{url('product')}}" class="badge bg-info pmd-ripple-effect p-2 text-white float-right">Back</a>
               </h6>
            	</div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
         <div class="card">
            <!--Card content-->
            <div class="card-body">
            	<form action="{{url('product_update/'.$product->id)}}" method="post" enctype="multipart/form-data">
            		{{ csrf_field() }}
            		{{ method_field('PUT') }}
            		<div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="">Category Id (Name)</label>
                        <select name="category_id" class="form-control">
                           <option value="">Select</option>
                           @foreach($category as $cateitem)
                           <option value="{{ $cateitem->id }}" {{ $cateitem->id == $product->category_id ? 'selected' : '' }}>{{ $cateitem->category_name }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group @error('product_name') has-error @enderror">
                        <label for="">Name</label>
                        <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}" placeholder="Enter Name">
                        @error('product_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                     </div>
                  </div>
                  
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="product_description" class="form-control" placeholder="Enter Description">{{$product->product_description}}</textarea>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="product_image" class="form-control">
                        <!--  @error('name')
                           <span class="text-danger">{{ $message }}</span>
                           @enderror -->
                        <img src="{{ asset('uploads/product_image/'.$product->product_image)}}" width="50px">
                     </div>
                  </div>
                  <div class="col-md-12">
                        <div class="form-group">
                           <button type="submit" class="btn btn-warning">UPDATE</button>
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
