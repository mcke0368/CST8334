<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseLog extends Model
{
    protected $fillable = [
        'title', 'location', 'position', 'company', 'start_time', 'end_time', 'indicent', 'number_participants',
        'group_size', 'other_leaders', 'weather_contitions', 'weather_temp', 'weather_wind', 'weather_notes',
        'notes', 'html_text'
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
