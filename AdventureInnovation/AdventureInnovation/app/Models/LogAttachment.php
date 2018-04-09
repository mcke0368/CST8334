<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogAttachment extends Model
{
    protected $fillable = [
        'storage_path', 'original_name'
    ];

    public function baselog() {
        return $this->belongsTo('App\Models\BaseLog');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
