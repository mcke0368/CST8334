<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'Title', 'URL',
    ];
    public function guides() {
        return $this->belongsTo('App\Models\Guide');
    }
}
