<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['category_name','category_description'];

    public function products(){
        return $this->hasMany(Product::class,'category_id','id')->where('status','0');
    }
}
