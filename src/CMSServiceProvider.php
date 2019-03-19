<?php
// --provider='CMSServiceProvider'
namespace HRZ\Cms;

use Illuminate\Support\ServiceProvider;

class CMSServiceProvider extends ServiceProvider
{
    protected $mainpath   = __DIR__ . DIRECTORY_SEPARATOR;
    public function register()
    {
        $this->app->bind('Cms', function () {
            return new Cms;
        });
        $this->mergeConfigFrom($this->mainpath . "Config" . DIRECTORY_SEPARATOR . "main.php", 'cvms');
    }
    public function boot()
    {
        require __DIR__ . '\Http\routes.php';

        $this->loadViewsFrom($this->mainpath . "Views", 'CVW');

        app('router')->aliasMiddleware(
            'admin',
            \HRZ\Cms\Http\Middleware\Admin::class
        );

        $this->publishes([
            $this->mainpath . 'config/main.php' => config_path('cms.php'),
        ], 'config'); // --tag=config
        $this->publishes([
            $this->mainpath . "Views" => base_path('resources/views/Cms')
        ], 'views'); // --tag=views
        $this->publishes([
            $this->mainpath . 'Migrations' => database_path('/migrations')
        ], 'migrations'); // --tag=migrations

    }
}
