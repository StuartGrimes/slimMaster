<?php

/**
 * Created by PhpStorm.
 * User: Stuart
 * Date: 09/06/2017
 * Time: 10:44
 */

namespace App\Controllers\HomeControllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'home.twig');
    }
}