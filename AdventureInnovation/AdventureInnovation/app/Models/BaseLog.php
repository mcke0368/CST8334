<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseLog extends Model
{
    protected $fillable = [
        'title', 'location', 'position', 'company', 'route', 'start_time', 'end_time', 'indicent', 'number_participants',
        'group_size', 'other_leaders', 'weather_contitions', 'weather_temp', 'weather_wind', 'weather_notes',
        'notes', 'html_text', 'public'
    ];

    /* translation to the child tables, ie rafting log, climbing log */
    public function base_logable() {
        $this->morphTo();
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

    /**********************************************************************************
     * Log Attachments
     **********************************************************************************/

    public function log_attachments() {
        return $this->hasMany('App\Models\LogAttachment');
    }
}
