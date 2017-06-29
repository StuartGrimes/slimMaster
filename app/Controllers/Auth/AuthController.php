<?php
/**
 * Created by PhpStorm.
 * User: stuart
 * Date: 11/06/2017
 * Time: 18:11
 */

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    public function getSignUp($request, $response)
    {
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignUp($request, $response)
    {
        $user = User::create([
            'email' => $request->getParam('email'),
            'name' => $request->getParam('name'),
            'password' => $request->getParam('password'),
        ]);

        return $response->withRedirect($this->router->pathFor('home'));
//        $newResponse =  $response->withRedirect($this->router->pathFor('home'));
//
//        $headers = $newResponse->getHeaders();
//        foreach ($headers as $key => $value){
//            echo $key . ":" . implode(",", $value);
//        }
    }

}