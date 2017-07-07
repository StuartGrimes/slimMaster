<?php
/**
 * Created by PhpStorm.
 * User: stuart
 * Date: 07/07/2017
 * Time: 10:47
 */

namespace App\Middleware;


class OldInputMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {

        $this->container->view->getEnvironment()->addGlobal('old', $_SESSION['old']);
        $_SESSION['old']= $request->getParams();

        $response = $next($request, $response);
        return $response;
    }
}