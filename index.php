<?php
require_once 'vendor/autoload.php';
require_once 'Configuration.php';

use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Models\AdministratorModel;
use App\Models\CategoryModel;
use App\Core\Router;

$databaseConfiguration= new DatabaseConfiguration(
    Configuration::DATABASE_HOST,
    Configuration::DATABASE_USER,
    Configuration::DATABASE_PASS,
    Configuration::DATABASE_NAME);
$databaseConnection=new DatabaseConnection($databaseConfiguration);

$url=strval(filter_input(INPUT_GET,'URL'));

$httpMethod=filter_input(INPUT_SERVER,'REQUEST_METHOD');
$router=new Router();
$routes= require_once 'Routes.php';
foreach($routes as $route){
    $router->add($route);
}

$route=$router->find($httpMethod,$url);

$args=$route->extractArgs($url);


$fullControllerName = '\\App\\Controllers\\'.$route->getControllerName().'Controller';
$controller= new $fullControllerName($databaseConnection);
call_user_func_array([$controller,$route->getMethodName()],$args);
$data=$controller->getData();

#foreach($data as $name=>$value){
 #   $$name=$value;
#}
$data['BASE'] = Configuration::BASE;
#require_once 'views/'.$route->getControllerName().'/'.$route->getMethodName().'.php';
$loader= new Twig_Loader_Filesystem("./views");
$twig= new Twig_Environment($loader,["cache"=>"./twig-cache","auto_reload"=>true]);
echo $twig->render($route->getControllerName().'/'.$route->getMethodName().'.html',$data);
