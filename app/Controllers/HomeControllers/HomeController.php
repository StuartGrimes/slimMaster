<?php

/**
 * Created by PhpStorm.
 * User: Stuart
 * Date: 09/06/2017
 * Time: 10:44
 */

namespace App\Controllers\HomeControllers;

use Slim\Views\Twig as View;

class HomeController
{

    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function index($request, $response)
    {
        return $this->view->render($response, 'home.twig');
    }
}