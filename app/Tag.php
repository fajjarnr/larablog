<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];
    protected $table = 'tags';

    public function post(){
        return $this->belongsToMany('App\Post');
    }
}
