<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['judul', 'category_id', 'content', 'image', 'slug'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function tag(){
        return $this->belongsToMany('App\Tag');
    }
}
