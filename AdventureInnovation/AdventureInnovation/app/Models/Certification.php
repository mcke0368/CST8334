<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
