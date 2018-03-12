<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'Youtube_URL','Facebook_URL','Twitter_URL','Instagram_URL',
    ];
    public function guides() {
        return $this->belongsTo('App\Models\Guide');
    }
}
