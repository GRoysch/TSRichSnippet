<?php

namespace TSRichSnippet\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
  public function sayHello(Twig $twig):string
  {
    print_r($dispatcher);
    return $twig->render('TSRichSnippet::content.hello');
  }
}
