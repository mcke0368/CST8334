<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KayakingLog extends Model
{
    protected $fillable = [
      'rapid_class', 'flow_level', 'company', 'trip_type', 'trip_number'
    ];

    /* get access to the baselog */
    public function baselog() {
        return $this->morphOne('BaseLog', 'logable');
    }

    public function template() {
        return $this->belongsTo('App\Models\LogTemplate');
    }



}
