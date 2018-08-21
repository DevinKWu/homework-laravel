<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    //
    protected $fillable = ['user_id','name','body'];
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
