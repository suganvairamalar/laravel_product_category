@extends('layouts.product_app')
@section('content')

<div class="row">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <div class="panel-body">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="table-responsive">
            <div class="panel panel-default">      				
               @include('admin.product.product_list')   
            </div>
         </div>
      </div>
      
   </div>
</div>

<div class="row">
      <div id="product_confirm_Modal" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header bg-danger">
                  <label class="modal-title">CONFIRMATION</label>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <p style="color:red;font-size:16px;font-weight: bold;font-style: italic;">Are you sure !! want to delete this record?</p>
               </div>
               <div class="modal-footer bg-danger">
                  <button type="button" name="product_ok_button" id="product_ok_button" class="btn btn-danger">OK</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection