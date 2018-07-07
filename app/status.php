<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Status;
use Session;

Relation::morphMap([
    'users'   	=> 'App\User',
    'profiles' 	=> 'App\Profile',
    'images'   	=> 'App\Image',
]);

class status extends Model
{

   protected $fillable = [
        'status',
        'statusable_type',
        'statusable_id',
    ];

    public function statusable()
    {
        return $this->morphTo();
    }

    public static function change_status($id, $type, $action)
    {
        $status = Status::where('statusable_id', $id)->where('statusable_type', $type)->first();
        $status->status =  $action;
        $status->save();

        Session::flash('success', 'Applied new status: ' .  $action . ' to ' . $type);
        return redirect()->back();
    }
}
