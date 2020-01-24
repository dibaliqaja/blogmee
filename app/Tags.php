<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table    = 'tags';
    protected $fillable = ['name','slug','users_id'];

    public function posts()
    {
        return $this->belongsToMany('App\Posts');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
