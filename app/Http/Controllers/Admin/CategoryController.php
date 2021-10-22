<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index(){

        $category = Category::where('status','!=','3')->paginate(5);
        return view('admin.category.index')->with('category',$category);
    }

     public function category_search(Request $request){
        //return view('categories.category_index');
         if($request->search==""){
             
                $categories = Category::orderBy('id','desc')->paginate(5);
                return view('categories.category_index',compact('categories'));
            }else{
            $categories = Category::where('category_name','LIKE','%'.$request->search.'%')                      
                       ->orderBy('id','asc')
                       ->paginate(5);

                $categories->appends($request->only('search')); //intha line code add pannathumthaan search correct ah work aachu..before without this line search first page work aaguthu more thaan one page data irukkum pothu second page filter aagama yella datavum 2nd page la show aachu...intha line command panni run panna u have to understand what is the problem in searching in 2nd page pagination problem... 
                          
            return view('categories.category_index',compact('categories'));
           
          } 
    }

    public function create(){
        //$group = Groups::where('status','!=','3')->get();
        return view('admin.category.create');///->with('group',$group);
    }

    public function store(Request $request){
        
        $category = new Category();
       
        $category->category_name = $request->input('category_name');
       
        $category->category_description = $request->input('category_description');
       
      $category->status = $request->input('status')== true ? '1':'0'; //0->show,1->hide
        $category->save();

        //return redirect()->back()->with('status', 'Category Added Successfully'); //use to show in same page
        return redirect('/category')->with('status', 'Category Added Successfully'); //use to show in index page

    }

    public function edit($id){
        $category = Category::findorfail($id);
       
        return view('admin.category.edit')->with('category',$category);
    }

    public function update(Request $request,$id){
        $category = Category::findorfail($id);
       
        $category->category_name = $request->input('category_name');
       
        $category->category_description = $request->input('category_description');
       
        $category->status = $request->input('status')== true ? '1':'0'; //0->show,1->hide
        $category->update();

        return redirect('/category')->with('status', 'Category Updated Successfully');
    }

    public function delete($id){

          $products=  Product::whereCategoryId($id,Input::get('id'))->count();

        //$products = Product::where('category_id', Input::get('id'))->count();
//dd($products);

        if($products > 0){
         return Redirect::to('/category')
                ->with('danger', 'This Category is Assigned to Product, so not able to delete');
        }
        else{

        $category = Category::findorfail($id);
        $category->status='3';
        $category->update();
         return redirect('/category')->with('status', 'Category Deleted Successfully');
        }
    }

    public function delete_records(){
        $category = Category::where('status','3')->get();
        return view('admin.category.deleted')
                ->with('category',$category);
    }


     public function delete_restore($id){
        $category = Category::findorfail($id);
        $category->status = "0"; //0->show, "1"->hide, "2"->delete;
        $category->update();
        return redirect('/category')->with('status',"Category Data Re Stored Successfully");
    }

}
