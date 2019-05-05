<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillable = ['date','price','concert_id'];

    public $timestamps = false;

    public function concerts(){
        return $this->hasMany('App\Concert');
    }

}
