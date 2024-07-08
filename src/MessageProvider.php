<?php

namespace BalachandranLaraMessage\Message;

use Illuminate\Support\ServiceProvider;
use App\Http\Kernel;

class MessageProvider extends ServiceProvider
{

    public function boot(Kernel $kernel)
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php'); //this used to route work
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'message'); //this for blade view in a package

        $this->publishes([
            __DIR__.'/../public' => public_path('balachandran_lara_message/message'),
        ], 'public');
    }
    
    public function register()
    {
    }

}