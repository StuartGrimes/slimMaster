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
        if (!empty($_SESSION['errors'])) {
            $this->container->view->getEnvironment()->addGlobal('errors', $_SESSION['errors']);
            unset($_SESSION['errors']);
        }

        $response = $next($request, $response);
        return $response;
    }

}