<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseLog extends Model
{
    protected $fillable = [
        'title', 'html_text', 'attachment_location', 'logable_type', 'logable_id'
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
}
