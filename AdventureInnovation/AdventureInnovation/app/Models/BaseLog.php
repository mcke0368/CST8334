<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model class for the Base logs.  Dependencies are setup for guide, log types and log attachment models.
 * NOTE: base_logable() doesn't seem to work.... not sure if this is a laravel bug. Following the call stack seems
 * to get to the query stage with the appropriate table and query params but fails for some reason.  At the moment
 * the work around is to get the class name of the associated log class (kayaking, for example) the the associated
 * log and get it that way.
 * Class BaseLog
 * @package App\Models
 */
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
