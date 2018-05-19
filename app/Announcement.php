<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Announcement extends Model
{
    //
    protected $table='announcements';
    public $primarykey ='id';
    protected $fillable=['announcement_title','user_id'];
    public $timestamps= false;
    
    public function user()
{
    return $this->belongsTo('App\User');
}
}
