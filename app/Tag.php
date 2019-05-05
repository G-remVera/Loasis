<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name','slug'];

    public $timestamps = false;

    public function artistes(){
        return $this->belongsToMany('App\Artiste');
    }

}
