<?php
/**
 * Created by PhpStorm.
 * User: stuart
 * Date: 06/07/2017
 * Time: 19:53
 */

namespace App\Middleware;


class Middleware
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }
}