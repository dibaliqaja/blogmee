<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table    = 'category';
    protected $fillable = ['name','slug','users_id'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
