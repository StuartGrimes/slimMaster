<?php
/**
 * Created by PhpStorm.
 * User: stuart
 * Date: 11/06/2017
 * Time: 16:28
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $table = 'users';

    //you need to tell eloquent which fields are writable to in your db.

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}

;