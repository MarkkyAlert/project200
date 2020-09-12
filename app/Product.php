<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'detail_1','price', 'category_id', 'picture','instock', 'add_product','weight', 'size'];
    //many to one
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
