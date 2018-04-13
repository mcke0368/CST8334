<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model class for the Guide.  Sets up dependencies for the user, certifications and logbooks models.
 * Class Guide
 * @package App\Models
 */
class Guide extends Model
{
    protected $fillable = [
        'about', 'work_experience', 'employment_history', 'training',
    ];

     /**********************************************************************************
     * User
     **********************************************************************************/

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

     /**********************************************************************************
     * certifications
     **********************************************************************************/

    public function certifications() {
        return $this->belongsToMany('App\Models\Certification', 'certification_guide');
    }

     /**********************************************************************************
     * logbooks
     **********************************************************************************/

    public function logbooks() {
        return $this->hasMany('App\Models\BaseLog');
    }

}
