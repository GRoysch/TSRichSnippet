<?php

namespace TSRichSnippet\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\Events\Dispatcher;

class ContentController extends Controller
{
  public function sayHello(Twig $twig, Dispatcher $dispatcher):string
  {
    print_r($dispatcher);
    return $twig->render('TSRichSnippet::content.hello');
  }
}
