<?php


namespace TedbreeDigital\JotForm;


use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
	
	
	/**
	* Perform post-registration booting of services.
    *
    * @return void
    */
    public function boot()
    {
		$this->publishes([
            __DIR__.'/../stubs/config/jotform.php' => config_path('jotform.php'),
        ], 'config');
		
		$this->mergeConfigFrom(__DIR__.'/../stubs/config/jotform.php', 'jotform');
	}
	
	
	
	/**
	* Register bindings in the container.
	    *
	    * @return void
	    */
	    public function register()
	    {
		$this->app->singleton('jotform', function ($app) {
			return new JotForm();
		}
		);
	}
}
