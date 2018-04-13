<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogTypes
 * This class tracks the kind of logs we can have, like kayaking, climing, etc.
 * @package App\Models
 */
class LogType extends Model
{

    public $incrementing = false;
    protected $primaryKey = 'base_logable_type';
    protected $fillable = [
        'base_logable_type', 'description', 'name', 'slug'
    ];

    /**********************************************************************************
     * Templates
     **********************************************************************************/

    public function templates() {
        return $this->hasMany('App\Models\LogTemplate');
    }

    /**********************************************************************************
     * Base logs
     **********************************************************************************/

    public function baselogs() {
        return $this->hasMany('App\Models\BaseLog');
    }

}
