<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
       'name', 'slug','description'
    ];

    public function users() {
        return $this->hasMany('App\User');
    }
}
