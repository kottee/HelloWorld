<?php
 
namespace Helloworld\Providers;
 
 
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Log\Loggable;
 
class HelloworldServiceProvider extends ServiceProvider
{
 use Loggable;
 
     public function register()
        {
      $this->getLogger(__METHOD__)->error('Novalnet::CallbackMailNotSend', 'test');
            $this->getApplication()->register(HelloworldRouteServiceProvider::class);
        }
}
