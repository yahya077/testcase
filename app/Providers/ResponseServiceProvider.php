<?php

namespace App\Providers;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class ResponseServiceProvider extends ServiceProvider
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
    public function boot(ResponseFactory $factory)
    {
        $factory->macro('success', function ($message = '', $data = null, $status = 200) use ($factory) {
            $format = [
                'success' => true,
                'message' => $message,
                'data' => $data,
            ];

            return $factory->make($format,$status);
        });
    }
}
