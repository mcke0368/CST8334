<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseLog;

/**
 * Model class for the Rafting logs.  Sets up dependencies for the template and base log associates models.
 * Class RaftingLog
 * @package App\Models
 */
class RaftingLog extends Model
{
    protected $fillable = [
      'rapid_class', 'flow_level', 'launch_site', 'takeout_site', 'trip_type', 'trip_number', 'notes', 'name', 'slug'
    ];

    /**
     * Get access to the base log
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function baselogs() {
        return $this->morphOne('App\Models\BaseLog', 'base_logable', 'base_logable_type', 'base_logable_id');
    }

    /**
     * Get access to the template
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function template() {
        return $this->belongsTo('App\Models\LogTemplate');
    }



}
