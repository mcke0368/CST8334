<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KayakingLog extends Model
{
    protected $fillable = [
      'water_level',
    ];

    /* get access to the baselog */
    public function baselog() {
        return $this->morphOne('BaseLog', 'logable');
    }

}
