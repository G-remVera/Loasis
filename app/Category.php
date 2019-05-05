<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = ['name','slug', 'id'];

    public function artistes(){
        return $this->hasMany('App\Artiste');
    }

    public function concerts(){
        return $this->hasMany('App\Concert');
    }
}
