<?php
 
namespace Helloworld\Controllers;
 
 
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Log\Loggable;
 
class ContentController extends Controller
{
 use Loggable;
        public function sayHello(Twig $twig)
    {
         $this->getLogger(__METHOD__)->error('Novalnet::CallbackMailNotSend', 'testdata');
        return $twig->render('Helloworld::content.hello');
    
    }
}

