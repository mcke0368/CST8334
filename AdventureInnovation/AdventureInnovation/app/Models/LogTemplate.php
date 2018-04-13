<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model class for the Log templates.  Sets up the dependency for the log types model.
 * Class LogTemplate
 * @package App\Models
 */
class LogTemplate extends Model
{
    protected $fillable = [
        'name','description', 'base_logable_type', 'html_data'
    ];

    /**********************************************************************************
     * LogTypes
     **********************************************************************************/

    public function logtype() {
        return $this->hasOne('App\Models\LogType');
    }
}

