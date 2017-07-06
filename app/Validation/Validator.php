<?php
/**
 * Created by PhpStorm.
 * User: stuart
 * Date: 06/07/2017
 * Time: 16:11
 */

namespace App\Validation;

use Respect\Validation\Validator as Respect;

class Validator
{
    public function validate($request, array $rules)
    {
        var_dump('Works');
        die();

    }
}