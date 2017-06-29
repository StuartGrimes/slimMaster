 <?php
/**
 * Created by PhpStorm.
 * User: Stuart
 * Date: 08/06/2017
 * Time: 19:43
 */
//session_start();
require __DIR__ . '/../vendor/autoload.php';

 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
            'driver'=>'mysql',
            'host'=>'localhost',
            'database'=>'slimmaster',
            'username'=>'root',
            'password'=> 'root',
            'charset'=> 'utf8',
            'collation'=> 'utf8_unicode_ci',
            'prefix'=>'',
        ]
    ]
]);

$container = $app->getContainer();

$capsule = new \Illuminate\Database\Capsule\Manager;

$capsule->addConnection($container['settings']['db']);

$capsule->setAsGlobal();

$capsule->bootEloquent();

$container['db'] = function ($container) use ($capsule){
    return $capsule;
};


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

 $container['AuthController'] = function ($container){
     return new App\Controllers\Auth\AuthController($container);
 };

require __DIR__ . '/../app/routes.php';

