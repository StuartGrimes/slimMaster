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
use Respect\Validation\Validator as v;

class AuthController extends BaseController
{
    public function getSignUp($request, $response)
    {
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function postSignUp($request, $response)
    {
        $validation = $this->Validator->validate($request, [
            'email'=> v::noWhitespace()->notEmpty()->email()->EmailAvailable(),
            'name' => v::notEmpty()->alpha(),
            'password'=> v::noWhitespace()->notEmpty()
        ]);

        if ($validation->failed()){
            //redirect back
            return $response->withRedirect($this->router->pathFor('auth.signup'));

            //create some middleware that will hold our errors and then pass them through to a view
        }

        $user = User::create([
            'email' => $request->getParam('email'),
            'name' => $request->getParam('name'),
            'password' => $request->getParam('password'),
        ]);

        return $response->withRedirect($this->router->pathFor('home'));




//        $newResponse = $response->withRedirect((string)$this->router->pathFor('home'));

//        $newResponse = $newResponse->withoutHeader('Content-Type');
//        return $newResponse;

//        $status = $newResponse->getStatusCode();

//
//        $headers = $newResponse->getHeaders();
//        foreach ($headers as $key => $value){
//            echo $key . ":" . implode(",", $value);
//        }

    }

}