<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogTemplate extends Model
{
    protected $fillable = [
        'title','description', 'logable_type', 'html_data'
    ];

    /**********************************************************************************
     * LogTypes
     **********************************************************************************/

    public function logtype() {
        return $this->hasOne('App\Models\LogType');
    }

    public function kayakinglogs() {
        return $this->hasMany('App\Models\KayakingLog');
    }

}


/*
mysql> desc log_templates;
+--------------+------------------+------+-----+---------+----------------+
| Field        | Type             | Null | Key | Default | Extra          |
+--------------+------------------+------+-----+---------+----------------+
| id           | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| title        | varchar(100)     | NO   |     | NULL    |                |
| description  | longtext         | NO   |     | NULL    |                |
| logable_type | varchar(64)      | YES  | MUL | NULL    |                |
| created_at   | timestamp        | YES  |     | NULL    |                |
| updated_at   | timestamp        | YES  |     | NULL    |                |
+--------------+------------------+------+-----+---------+----------------+
6 rows in set (0.00 sec)
*/