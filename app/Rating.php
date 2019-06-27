<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable=['description','rating'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
