<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model class for Trips.  Trips are a collection of logs.
 * NOTE: not used at present.
 * Class Trip
 * @package App\Models
 */
class Trip extends Model
{
    protected $fillable = [
        'startDate', 'endDate',
    ];
}
