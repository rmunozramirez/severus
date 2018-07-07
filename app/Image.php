<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Image;
use Illuminate\Support\Facades\Auth;

Relation::morphMap([
    'profiles'      => 'App\Profile',
]);

class Image extends Model
{

   protected $fillable = [
        'profile_id',
        'imageable_id',
        'imageable_type',
        'title',
		'slug',
        'alt', 
        'about',
    ];

	use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function statuses()
    {
        return $this->morphMany('App\Status', 'statusable');
    }

    public static function create_image($file, $type, $imageable_id)
    {

        $name = time() . '-' . $file->getClientOriginalName();
        $slug = $name;
        $file->move('images', $slug);
        $profile_id = Auth::id();

        $image = new Image;
        $image->slug =  $slug; 
        $image->title =  $name;
        $image->imageable_type = $type;
        $image->imageable_id = $imageable_id;
        $image->alt = $name;
        $image->about = $name;
        $image->profile_id = $profile_id;

        $image->save();

        //Status of the image
        Status::create_status($image->id, 'images');

        return $image;
    }

}
