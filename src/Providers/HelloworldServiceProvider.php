<?php
 
namespace Helloworld\Providers;
 
 
use Plenty\Plugin\ServiceProvider;
 
class HelloworldServiceProvider extends ServiceProvider
{
 
 
     public function register()
        {
            $this->getApplication()->register(HelloworldRouteServiceProvider::class);
        }
}
