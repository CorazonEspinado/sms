<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'sender', 'recipient','direction','keywords'
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
