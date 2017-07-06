<?php
/**
 * Created by PhpStorm.
 * User: stuart
 * Date: 06/07/2017
 * Time: 19:56
 */

namespace App\Middleware;


class ValidationErrorsMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        // TODO: Implement __invoke() method.
        var_dump('middleware sorted.');
    }

}