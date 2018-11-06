<?php

namespace TSRichSnippet\Providers;

use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

class TSRichSnippetServiceProvider extends serviceProvider
{
  /**
   * Register ther service Providers
   */

   public function register()
   {
     $this->getApplication()->register(TSRichSnippetRouteServiceProvider::class);
   }

   /**
    * boot twig extensions and Services
    */
   public function boot(Twig $twig)
   {
   }

}
