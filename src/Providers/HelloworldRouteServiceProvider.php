<?php
 
namespace Helloworld\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class HelloworldRouteServiceProvider extends RouteServiceProvider
{
   
    public function map(Router $router)
    {
        $router->get('hello','Helloworld\Controllers\ContentController@sayHello');
    }
}
