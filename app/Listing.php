<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    // Making relation ship with User model

    public function user(){
        return $this->belongsTo('App\User');
    }

}
