<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table    = 'category';
    protected $fillable = ['name','slug','users_id'];

    public function posts()
    {
        return $this->hasMany('App\Posts');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
