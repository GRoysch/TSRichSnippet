<?php

namespace TSRichSnippet;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

class RichSnippetCodeProvider extends ServiceProvider
{
  public function call(Twig $twig)
  {
    return $twig->render('TSRichSnippet::content.hello');
  }
}
