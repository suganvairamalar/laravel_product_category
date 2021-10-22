<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   
   protected $table = 'products';

    protected $fillable = ['category_id','product_name','product_description','product_image'];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id','');
    }
}
