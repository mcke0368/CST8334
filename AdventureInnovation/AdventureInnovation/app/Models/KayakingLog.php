<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseLog;

/**
 * Model class for White Water Kayaking.  Sets up dependencies for base logs and template models.
 * Class KayakingLog
 * @package App\Models
 */
class KayakingLog extends Model
{
    protected $fillable = [
      'rapid_class', 'flow_level', 'launch_site', 'takeout_site', 'distance', 'boat_used', 'notes', 'name', 'slug'
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
