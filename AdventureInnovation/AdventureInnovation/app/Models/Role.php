<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


// Model for classifying user types, i.e. user can be guide, corporate, admin
class Role extends Model
{
    // define relationation between role and user as many-to-many
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
