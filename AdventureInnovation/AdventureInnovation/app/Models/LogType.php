<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LogTypes
 * This class tracks the kind of logs we can have, like kayaking, climing, etc.
 * @package App\Models
 */
class LogType extends Model
{
    protected $fillable = [
        'logable_type', 'description'
    ];


    /**********************************************************************************
     * Templates
     **********************************************************************************/

    public function templates() {
        return $this->hasMany('App\Models\LogTemplate');
    }

    /**********************************************************************************
     * Base logs
     **********************************************************************************/

    public function baselogs() {
        return $this->hasMany('App\Models\BaseLog');
    }

}
/*
mysql> desc log_types;
+--------------+-------------+------+-----+---------+-------+
| Field        | Type        | Null | Key | Default | Extra |
+--------------+-------------+------+-----+---------+-------+
| logable_type | varchar(64) | NO   | PRI | NULL    |       |
| description  | longtext    | NO   |     | NULL    |       |
| created_at   | timestamp   | YES  |     | NULL    |       |
| updated_at   | timestamp   | YES  |     | NULL    |       |
+--------------+-------------+------+-----+---------+-------+
*/