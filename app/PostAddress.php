<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostAddress extends Model
{
    public function user(){
        return $this->hasOne('User', 'user_id');
    }
}
