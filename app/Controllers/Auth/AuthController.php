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
            'password' => password_hash($request->getParam('password'), PASSWORD_DEFAULT),
        ]);

        return $response->withRedirect($this->router->pathFor('home'));
//        $output = $request->getUri()->withPath($this->router->pathFor('home'));
//        $strOutput = (string)$output;
//        echo $strOutput;
//        die;

//        return $response->withRedirect((string)($request->getUri()->withPath($this->router->pathFor('home'))));


//        $newResponse = $response->withRedirect((string)$this->router->pathFor('home'));

//        $newResponse = $newResponse->withoutHeader('Content-Type');
//        return $newResponse;

//        $status = $newResponse->getStatusCode();
//
//        echo $status;

//        $headers = $newResponse->getHeaders();
//        foreach ($headers as $name => $values) {
//            echo $name . ": " . implode($values);
//        }
//return $newResponse;
    }

}