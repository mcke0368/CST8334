<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseLog;

class KayakingLog extends Model
{
    protected $fillable = [
      'rapid_class', 'flow_level', 'company', 'trip_type', 'trip_number'
    ];

    /* get access to the baselog */
    public function baselogs() {
        //return $this->morphOne('App\Models\BaseLog', 'base_logable');
        return $this->morphOne('App\Models\BaseLog', 'base_logable', 'base_logable_type', 'base_logable_id');
    }

    public function template() {
        return $this->belongsTo('App\Models\LogTemplate');
    }



}
