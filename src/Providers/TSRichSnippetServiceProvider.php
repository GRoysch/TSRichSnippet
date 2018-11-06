<?php

namespace TSRichSnippet\Providers;

use Plenty\Plugin\ServiceProvider;

class TSRichSnippetServiceProvider extends serviceProvider
{
  /**
   * Register ther service Providers
   */

   public function register()
   {
     $this->getApplication()->register(TSRichSnippetRouteServiceProvider::class);
   }
}
