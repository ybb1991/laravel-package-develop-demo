<?php

namespace Laravist\Hasher;

use Illuminate\Support\ServiceProvider;
use Laravist\Hasher\MDHasher;

class MDHasherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('mdhasher', function(){
            return new MDHasher();
        });
    }
}
