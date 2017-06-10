<?php
/**
 * Created by PhpStorm.
 * User: Stuart
 * Date: 08/06/2017
 * Time: 19:43
 */
session_start();

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$container = $app->getContainer();

$container['view'] = function($container){
  $view = new Slim\Views\Twig(__DIR__ . '/../resources/views', [
      'cache' => false,
  ]);

  $view->addExtension(new Slim\Views\TwigExtension(
      $container->router,
      $container->request->getUri()
  ));

  return $view;
};

$container['HomeController'] = function ($container){
    return new App\Controllers\HomeControllers\HomeController($container);
};

require __DIR__ . '/../app/routes.php';

