<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model class for certifications.  Sets up dependency for guides model.
 * Class Certification
 * @package App\Models
 */
class Certification extends Model
{
    protected $fillable = [
        'cert_name', 'cert_link', 'cert_expiry',
    ];

     /**********************************************************************************
     * certifications
     **********************************************************************************/

    public function guides() {
        return $this->belongsToMany('App\Models\Guide', 'certification_guide');
    }

}
