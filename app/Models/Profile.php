<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id', 'name', 'surname','email', 'phone', 'avatar'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
