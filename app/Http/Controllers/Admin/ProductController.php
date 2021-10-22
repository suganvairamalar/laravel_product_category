<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Product;
use App\Category;
use DB;

class ProductController extends Controller
{
    public function index(){
        $category = Category::all(['id', 'category_name']);
        //$product = Product::orderBy('id','desc')->paginate(5);
        $product = Product::where('status','!=','3')->paginate(5);
        return view('admin.product.index')
        ->with('category',$category)
        ->with('product',$product);
    }

    public function product_category_search(Request $request){

        /*$category = Category::all(['id', 'category_name']);
        $products = Product::orderBy('id','desc')->paginate(10);
          //dd(products);
        return view('admin.product.product_index')
        ->with('category',$category)
        ->with('products',$products);*/
         
         if($request->search==""){
         
         $category = Category::all(['id', 'category_name']);
         $products = Product::orderBy('id','desc')->paginate(10);

        return view('admin.product.product_index')
        ->with('category',$category)
        ->with('products',$products);

         }

         else{

            $category = Category::all(['id', 'category_name']);
         //$products = Product::orderBy('id','desc');
            $products = DB::table('products')
                 ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
                  ->select('products.*', 'categories.category_name')
                  ->orderBy('id','desc');


          if ($request->get('search_dropdown')=='category') {
             $products->where('category_name','LIKE','%'.$request->get('search').'%');
                      }  
                   
                   if ($request->get('search_dropdown')=='product') {
                      $products->where('product_name','LIKE','%'.$request->get('search').'%');
                      }  
                      $products=$products->paginate(10);
                      $products->appends($request->only('search'));

            return view('admin.product.product_index',compact('products'),compact('category'));
        }

    }

     public function create(){
         $category = Category::where('status','!=','3')->get();
        return view('admin.product.create')->with('category',$category);
    }

    public function store(Request $request){
        $product = new Product();
        $product->category_id = $request->input('category_id');
        $product->product_name = $request->input('product_name');
       
        $product->product_description = $request->input('product_description');
       
        if($request->hasfile('product_image')){
            $product_image_file = $request->file('product_image');
            $product_image_extension = $product_image_file->getClientOriginalExtension();//use to name
            $product_image_filename = time().".".$product_image_extension; //use to avoid repeat name
            $product_image_file->move('uploads/product_image/',$product_image_filename);
            $product->product_image = $product_image_filename;
        }

        $product->status = $request->input('status')== true ? '1':'0'; 
       
        $product->save();

        //return redirect()->back()->with('status', 'Sub Category Added Successfully'); //use to show in same page
        return redirect('product')->with('status', 'Product Added Successfully');
    }

    public function detail($id){
       $category = Category::all(['id', 'category_name']);
       $product = Product::findorfail($id);
        return view('admin.product.detail')->with('product',$product)->with('category',$category);
    }

    public function edit($id){
       
       $product = Product::findorfail($id);
       $category = Category::where('status','!=','3')->get();
        return view('admin.product.edit')->with('product',$product)->with('category',$category);
    }

    public function update(Request $request, $id){
        $product = Product::findorfail($id);
        $product->category_id = $request->input('category_id');
        $product->product_name = $request->input('product_name');
        $product->product_description = $request->input('product_description');
       
        //below code is use to delete existing image and update new 
        if($request->hasfile('product_image')){
            $product_image_destination = 'uploads/product_image/'.$product->product_image;
            if(File::exists($product_image_destination)){
                File::delete($product_image_destination);
            }
            $product_image_file = $request->file('product_image');
            $product_image_extension = $product_image_file->getClientOriginalExtension();//use to name
            $product_image_filename = time().".".$product_image_extension; //use to avoid repeat name
            $product_image_file->move('uploads/product_image/',$product_image_filename);
            $product->product_image = $product_image_filename;
            }
            $product->status                = $request->input('status')== true ? '1':'0'; 
            $product->update();
            
        return redirect('product')->with('status', 'Product Updated Successfully');

        
    }

    public function delete($id){
        $product = Product::findorfail($id);
        $product->status = '3';
        $product->update();
         return redirect('/product')->with('status', 'Product Deleted Successfully');
    }

    public function delete_records(){
        $product = Product::where('status','3')->get();
        return view('admin.product.delete')
                ->with('product',$product);
    }


     public function delete_restore($id){
        $product = Product::findorfail($id);
        $product->status = "0"; //0->show, "1"->hide, "2"->delete;
        $product->update();
        return redirect('/product')->with('status',"Product Data Re Stored Successfully");
    }
}
