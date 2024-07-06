<?php

namespace BalachandranLaraMessage\Message;

use Illuminate\Support\ServiceProvider;
use App\Http\Kernel;

class MessageProvider extends ServiceProvider
{

    public function boot(Kernel $kernel)
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }
    
    public function register()
    {
    }

}