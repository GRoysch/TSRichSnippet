<?php

namespace TSRichSnippet\Providers;

use Plenty\Plugin\RouteServiceProver;
use Plenty\Plugin\Routing\Router;

class TSRichSnippetRouteServiceProvider extends RouteServiceProver
{
  public function map(Router $router)
  {
    $router->get('test-rich-snippet', 'TSRichSnippet\Controllers\ContentController@sayHello');
  }
}
