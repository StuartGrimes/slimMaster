<?php
/**
 * Created by PhpStorm.
 * User: stuart
 * Date: 11/06/2017
 * Time: 18:11
 */

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function getSignUp($request, $response)
    {
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignUp($request, $response)
    {
        //process the form
    }

}