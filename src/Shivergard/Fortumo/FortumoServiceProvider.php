<?php namespace Shivergard\Fortumo;

use Illuminate\Support\ServiceProvider;

class FortumoServiceProvider extends ServiceProvider {

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

		//config publish
		$this->publishes([
		    __DIR__.'/fortumo.php' => config_path('fortumo.php'),
		]);

		require __DIR__ .'/../../routes.php';
		$this->loadViewsFrom(__DIR__.'/../../views', 'fortumo');
		$this->commands('Shivergard\Fortumo\FortumoConsole');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
