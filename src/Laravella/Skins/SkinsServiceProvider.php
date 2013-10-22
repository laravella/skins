<?php namespace Laravella\Skins;

use Illuminate\Support\ServiceProvider;

class SkinsServiceProvider extends ServiceProvider {

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
		$this->package('laravella/skins');

		include __DIR__.'/../../routes.php';         
		
		$this->registerCommands();
				
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        // Register 'underlyingclass' instance container to our UnderlyingClass object
        $this->app['dbgopher'] = $this->app->share(function($app)
        {
            return new DbGopher;
        });

        $this->app['mysqlgopher'] = $this->app->share(function($app)
        {
            return new MysqlGopher;
        });

        $this->app->booting(function()
            {
              $loader = \Illuminate\Foundation\AliasLoader::getInstance();
              $loader->alias('DbGopher', 'Laravella\Skins\Facades\DbGopher');
              $loader->alias('MysqlGopher', 'Laravella\Skins\MysqlGopher');
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
	
	/** register the custom commands **/
	public function registerCommands()
	{
//            Artisan::add(new InstallCommand);
//            Artisan::add(new UpdateCommand);
            
		$commands = array('SkinsInstall','SkinsUpdate');

		foreach ($commands as $command)
		{
			$this->{'register'.$command.'Command'}();
		}

		$this->commands(
			'command.skins.install','command.skins.update'
		);
                
	}	
        
	public function registerSkinsInstallCommand()
	{
		$this->app['command.skins.install'] = $this->app->share(function($app)
		{
			return new CartInstallCommand();
		});
	}

	public function registerSkinsUpdateCommand()
	{
		$this->app['command.skins.update'] = $this->app->share(function($app)
		{
			return new CartUpdateCommand();
		});
	}

        

}