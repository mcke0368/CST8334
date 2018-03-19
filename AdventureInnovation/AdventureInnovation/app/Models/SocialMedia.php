<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable = [
        'Facebook_URL','Twitter_URL','Instagram_URL'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
