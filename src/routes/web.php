<?php

use Illuminate\Support\Facades\Route;
use BalachandranLaraMessage\Message\Http\Controllers\HelloController;

Route::get('/message',function(){
    return 'Hi this message chat';
});

Route::get('hellow', [HelloController::class, 'index']);