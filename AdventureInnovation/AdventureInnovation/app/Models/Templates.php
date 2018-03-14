<?php
/**
 * Created by PhpStorm.
 * User: amclean
 * Date: 2018-03-13
 * Time: 9:54 AM
 */

namespace App\Models;

/*
 * Stores all the templates
 * - should have a name, a parent (might be unessary), user id and baselog id to be able to look up the model
 */
class Template extends Model
{
    protected $fillable = [
        'name', 'parent', 'user_id', 'baselog_id'
    ];

    /* override the default table name */
    protected $table = 'templates';

}