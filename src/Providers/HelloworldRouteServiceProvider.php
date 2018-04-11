<?php
 
namespace Helloworld\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
use Plenty\Plugin\Log\Loggable;
 
class HelloworldRouteServiceProvider extends RouteServiceProvider
{
   use Loggable;
    public function map(Router $router)
    {
     $this->getLogger(__METHOD__)->error('Novalnet::CallbackMailNotSend', 'rouetest');
        $router->get('hello','Helloworld\Controllers\ContentController@sayHello');
     $router->post('hello','Helloworld\Controllers\ContentController@sayHello');
    }
}
