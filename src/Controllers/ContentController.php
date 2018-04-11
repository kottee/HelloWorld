<?php
 
namespace Helloworld\Controllers;
 
 
use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
 
class ContentController extends Controller
{
        public function sayHello(Twig $twig)
    {
        return $twig->render('Helloworld::content.hello');
    
    }
}

