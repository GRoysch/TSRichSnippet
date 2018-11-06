<?php

namespace TSRichSnippet;

use Plenty\Modules\Basket\Contracts\BasketRepositoryContract;
use Plenty\Modules\Basket\Models\Basket;
use Plenty\Modules\Frontend\Services\AccountService;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;

class RichSnippetCodeProvider
{
  public function call(Twig $twig)
  {
    return $twig->render('TSRichSnippet::content.hello');
  }
}
