<?php

namepsace TSRichSnippet;

use Plenty\Plugin\ServiceProvider;

class RichSnippetCodeProvider extends ServiceProvider
{
  public call(Twig $twig)
  {
    return $twig->render('TSRichSnippet::content.hello');
  }
}
