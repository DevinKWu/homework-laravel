<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'body',
        'slug',
        'post_category_id',
    ];
    //
    public function category(){
        return $this->belongsTo('App\Models\PostCategory','post_category_id');
    }
}
