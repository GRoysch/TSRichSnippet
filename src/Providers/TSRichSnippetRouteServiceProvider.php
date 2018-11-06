<?php

namespace TSRichSnippet\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class TSRichSnippetRouteServiceProvider extends RouteServiceProvider
{
  public function map(Router $router)
  {
    $router->get('test-rich-snippet', 'TSRichSnippet\Controllers\ContentController@sayHello');
  }
}
