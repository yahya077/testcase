<?php

namespace Custom;

use Custom\Facade\Custom;
use Custom\Interface\ProviderInterface;
use Custom\Models\FirstProvider;
use Custom\Models\SecondProvider;
use Illuminate\Support\ServiceProvider;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->instance('custom', new Custom());
        $this->app->singleton(ProviderInterface::class,function (){
            foreach (config('custom.providers') as $key => $provider){
                if (request()->route()->getName() == $provider['routeName']){
                    return app($provider['model']);
                }
            }
            return new FirstProvider();
        });
    }
}
