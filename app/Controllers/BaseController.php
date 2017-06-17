<?php
/**
 * Created by PhpStorm.
 * User: Stuart
 * Date: 09/06/2017
 * Time: 12:06
 */

namespace App\Controllers;


class BaseController
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __get($name)
    {

        if ($this->container->{$name}) {
            return $this->container->{$name};
        } else {
            throw new \Exception('Cannot find this property on Container.');
        }

    }
}