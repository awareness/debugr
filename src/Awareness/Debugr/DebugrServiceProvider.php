<?php namespace Awareness\Debugr;

use Illuminate\Support\ServiceProvider;

class DebugrServiceProvider extends ServiceProvider {

  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    $this->package('awareness/debugr');
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->app['debugr'] = $this->app->share(function($app)
    {
      return new Debugr;
    });
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return array();
  }

}