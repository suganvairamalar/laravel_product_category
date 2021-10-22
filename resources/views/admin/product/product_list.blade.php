<div class="modal fade" id="product_detail_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">            
         </div>
         
      </div>
   </div>
</div>

<div class="container bootstrap snipets">
   <form id="product_search_form" action="/">
      <table class="table table-striped table-bordered table-hover" width="100%">
         <tr>
            @if(Session::has('success'))
               <div class="alert alert-success">
                  {{ Session::get('success') }}
               </div>
               @endif
         </tr>
         <tr>
            <td class="col-md-3 col-lg-3 col-xs-3 col-sm-3" >
               <select class="form-control" name="search_dropdown" id="search_dropdown">
                  <option value="">Select Search</option>
                  <option value="category">CATEGORY</option>
                  <option value="product">PRODUCT</option>
               </select>
            </td>
            <td class="col-md-7 col-lg-7 col-xs-7 col-sm-7" >
               {{ csrf_field() }}
               {{ method_field('GET') }}
               <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
               <input type="text" class="form-control" name="search" id="search">
            </td>
            <td class="col-lg-2 col-xs-2 col-sm-2 col-md-2">
               <button type="submit" class="btn btn-warning" id="product_search_submit" name="product_search_submit">
               <span class="glyphicon glyphicon-search"></span></button> 
               <a href="{{url('/')}}" class="btn btn-primary"><span class="reloadbtn glyphicon glyphicon-refresh"></span></a>                     
            </td>
         </tr>
      </table>
   </form>
   @if(!empty($products))  
   <h1 class="text-center text-muted">Products</h1>
   <div class="row flow-offset-1">
      @foreach($products as $item)
      <div class="col-xs-7 col-md-3">
         <div class="product tumbnail thumbnail-3">
            <img src="{{asset('uploads/product_image/'.$item->product_image)}}" alt="Product Image" width="150px" height="150px">
         </div>
         <div class="caption">
            <h3>{{ $item->product_name }}</h3>
         </div>
         <div class="caption">
            <h5>{{ $item->product_description }}</h5>
         </div>
         <div class="caption">
            <a href="{{url('product_detail/'.$item->id)}}" id="{{ $item->id }}" data-toggle="modal" data-target="#product_detail_Modal" class="btn btn-warning">View Details</a>
         </div>
         <br>
      </div>
      @endforeach      
   </div>
   @endif
   {!! $products->appends(Request::capture()->except('page'))->render() !!}
</div>