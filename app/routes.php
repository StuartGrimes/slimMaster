<?php
/**
 * Created by PhpStorm.
 * User: Stuart
 * Date: 09/06/2017
 * Time: 10:33
 */

$app->get('/', 'HomeController:index');

$app->get('/auth/signup/', 'AuthController:getSignUp')->setName('auth.signup');

$app->post('/auth/signup/', 'AuthController:postSignUp');