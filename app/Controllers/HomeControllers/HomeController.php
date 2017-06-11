<?php

/**
 * Created by PhpStorm.
 * User: Stuart
 * Date: 09/06/2017
 * Time: 10:44
 */

namespace App\Controllers\HomeControllers;

use App\Controllers\BaseController;
use App\Models\User;


class HomeController extends BaseController
{
    public function index($request, $response)
    {
        /**
         * below is just one way to do a query via your db property to mysql
         **/
//        $user = $this->db->table('users')->find(1);
//        var_dump($user);
        //die();
        /**
         * below is a way using the models class that is part of eloquent
         */
//        $user = User::where('email', 'stuartgrimes@me.com')->first();
//        var_dump($user);
//        die();

        User::create([
            'name'=>'Tanya',
            'email'=>'tanyag@me.com',
            'password'=> '123',
        ]);

        return $this->view->render($response, 'home.twig');
    }
}