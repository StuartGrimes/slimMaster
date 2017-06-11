<?php

/**
 * Created by PhpStorm.
 * User: Stuart
 * Date: 09/06/2017
 * Time: 10:44
 */

namespace App\Controllers\HomeControllers;

use App\Controllers\BaseController;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class HomeController extends BaseController
{
    public function index($request, $response)
    {
        $user = $this->db->table('users')->find(1);
        var_dump($user);
        die();
        return $this->view->render($response, 'home.twig');
    }
}