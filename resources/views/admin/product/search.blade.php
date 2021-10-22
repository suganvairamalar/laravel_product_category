@extends('layouts.frontend')
@section('title')
Product
@endsection
@section('content')
<table class="table table-striped table-bordered table-hover">
                  <thead>
                     <th>ID</th>
                     <th>NAME</th>
                     <th>CATEGORY NAME</th>
                     <th>IMAGE</th>
                    
                     <th>ACTION</th>
                  </thead>
                  <tbody>
                     @foreach($products as $item)
                     <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->category->category_name }}
                        <td><img src="{{ asset('uploads/product_image/'.$item->product_image)}}" width="50px"></td>
                        
                        <td><a href="{{url('product_edit/'.$item->id)}}" id="{{ $item->id }}" class="badge btn-warning">Edit</a>
                           <a href="{{url('product_delete/'.$item->id)}}" id="{{ $item->id }}" class="badge btn-danger">Delete</a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               <div class="float-right">{{$product->links()}}</div> 
               @endsection