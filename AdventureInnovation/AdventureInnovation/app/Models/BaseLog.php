<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseLog extends Model
{
    protected $fillable = [
        'debrief', 'date_created', 'date_occurred', 'date_modified', 'weather', 'temperature', 'route',
        'activity', 'groupsize', 'waterlevels', 'location', 'format', 'notes', 'summary', 'title', 'html_text',
        'attachement_location', 'logable_type', 'logable_id'
    ];

    /* translation to the child tables, ie kayaking log, climbing log */
    public function logable() {
        $this->morphsTo();
    }

    /**********************************************************************************
     * guide
     **********************************************************************************/

    public function guide() {
        return $this->belongsTo('App\Models\Guide');
    }

    /**********************************************************************************
     * Log Types
     **********************************************************************************/

    public function logtype() {
        return $this->hasOne('App\Models\LogType');
    }
}
