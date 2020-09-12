<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //one to many
    public function products(){
        return $this->hasMany(Product::class);
    }
}
