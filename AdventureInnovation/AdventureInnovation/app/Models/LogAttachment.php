<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model class for log file attachments.  Sets up the dependencies for the user and base log associated
 * with the attachement
 * Class LogAttachment
 * @package App\Models
 */
class LogAttachment extends Model
{
    protected $fillable = [
        'storage_path', 'original_name'
    ];

    /**
     * Get the base log associated with this attachment
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function baselog() {
        return $this->belongsTo('App\Models\BaseLog');
    }

    /**
     * Get the user associated with this attachment.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
