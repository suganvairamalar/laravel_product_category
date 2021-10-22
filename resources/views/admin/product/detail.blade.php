@extends('layouts.product_detail_app')
@section('content')

<div class="container-fluid mt-5">
   <!-- Heading -->
   <
   <div class="row">
      <div class="col-md-12">
 
         <form method="get" id="product_form">
                  <span id="product_form_result"></span>
                  {{ csrf_field() }}
                  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">


                   <div class="form-group">
                     <label for="product_name">PRODUCT NAME</label>
                     <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" value="{{$product->product_name}}" >
                  </div>


                   <div class="form-group">
                     <label for="product_category_name">CATEGORY </label>
                      <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" value="{{$product->category->category_name}}" >
                  </div>                   
                  
                 

                  <div class="form-group">
                     <label for="product_name">DESCRIPTION</label>
                     <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name" value="{{$product->product_description}}" >
                  </div>

                   <div class="product tumbnail thumbnail-3">
            <img src="{{asset('uploads/product_image/'.$product->product_image)}}" alt="Product Image" width="150px" height="150px">
         </div>

                  <div class="col-md-12">
                        <div class="form-group">
                           

                           <a href="{{url('/contact-us')}}" id="" class="btn btn-success">ENQUIRY</a>
                        </div>
                     </div>
                  <input type="hidden" name="hidden_id" id="hidden_id" class="form-control">   
                  <input type="hidden" name="hidden_product_category_id" id="hidden_product_category_id" class="form-control">
               
               </form>
         
    </div>

   
        
    </div>

</div>

@endsection
