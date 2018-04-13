<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model class for Videos.  Sets up the dependency for the User models
 * Class Video
 * @package App\Models
 */
class Video extends Model
{
    protected $fillable = [
        'Youtube_URL',
    ];

    /**
     * Get the user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
