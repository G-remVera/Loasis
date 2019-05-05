<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name','biography','logo','instagram','facebook','youtube','bandcamp','siteweb','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function concerts(){
        return $this->belongsToMany('App\Concert');
    }

}
