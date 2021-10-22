        <div class="container">
           
            <div class="col-md-12">
         <h4 class="font-weight-bold">Search Products</h4>
         <hr>
         <div class="">
            @foreach($products as $item)
            <div class="item">
               <div class="card border">
                   <div class="card-body">
                    <div class="row">
                    <div class="col-md-3">
                      <img src="{{asset('uploads/product_image/'.$item->product_image)}}" alt="Product Image" width="150px" height="150px"> <!-- class="w-100" -->
                      </div> 
                      <div class="col-md-9">
                         <h6>Rs: {{ $item->product_description }}</h6>
                      </div>
                      <div class="col-md-12">
                            <h1>{{ $item->product_name }}</h1>
                            <hr>  
                      </div>  
                      <div class="col-md-12">
                        <a href="" class="btn btn-block btn-primary">VIEW DETAILS</a>      
                      </div>
                   </div>
               </div>
            </div>   
         </div>
         @endforeach
      </div>

      </div>
            
            
         </div><!-- End row -->
