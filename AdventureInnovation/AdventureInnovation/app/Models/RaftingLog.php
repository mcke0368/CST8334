<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseLog;

class RaftingLog extends Model
{
    protected $fillable = [
      'rapid_class', 'flow_level', 'launch_site', 'takeout_site', 'trip_type', 'trip_number', 'notes', 'name', 'slug'
    ];

    /* get access to the baselog */
    public function baselogs() {
        return $this->morphOne('App\Models\BaseLog', 'base_logable', 'base_logable_type', 'base_logable_id');
    }

    public function template() {
        return $this->belongsTo('App\Models\LogTemplate');
    }



}
