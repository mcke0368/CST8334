<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model lclass for social media.  Sets up the dependencies on the user model.
 * Class SocialMedia
 * @package App\Models
 */
class SocialMedia extends Model
{
    protected $fillable = [
        'Facebook_URL','Twitter_URL','Instagram_URL'
    ];

    /**
     * Get the user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
