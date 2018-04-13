<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseLog;

/**
 * Model class for Rock Climbing log.  Setups up dependencies for the template and base logs models.
 * Class ClimbingLog
 * @package App\Models
 */
class ClimbingLog extends Model
{
    protected $fillable = [
       'climb_type', 'multi_pitch', 'climbing_conditions','rating_difficulty',
        'rating_letter', 'height', 'notes', 'name', 'slug'
    ];

    /* get access to the baselog */
    public function baselogs() {
        return $this->morphOne('App\Models\BaseLog', 'base_logable', 'base_logable_type', 'base_logable_id');
    }

    public function template() {
        return $this->belongsTo('App\Models\LogTemplate');
    }
}
