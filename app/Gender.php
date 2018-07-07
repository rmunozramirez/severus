<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
	protected $fillable = [
	    'title',
        'slug',
	];

    public function profiles()
    {
        return $this->hasMany('App\Profile');
    }
}
