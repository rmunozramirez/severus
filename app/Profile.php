<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Profile;

class Profile extends Model
{

   protected $fillable = [
        'user_id',
        'gender_id',
        'title',
        'subtitle',
        'role_id',
		'slug',
        'birthday', 
        'about',

    ];

	use SoftDeletes;
    protected $dates = ['deleted_at', 'birthday'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender');
    } 
    
    public function imageables()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    // public function salutation()
    // {
    //     return $this->belongsTo('App\Salutation');
    // }

    // public function posts()
    // {
    //     return $this->hasMany('App\Post');
    // }

 
 
    // public function pages()
    // {
    //     return $this->hasMany('App\Page');
    // }

}
