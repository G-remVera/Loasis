<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    protected $fillable = ['name_concert','description_concert','img','category_id'];

    public function category(){
        return $this->belongsToMany('App\Category','category_id');
    }

    public function artistes(){
        return $this->belongsToMany('App\Artist');
    }

    public function dates(){
        return $this->belongsTo('App\Date');
    }
}
