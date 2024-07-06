<?php

use BalachandranLaraMessage\Message\Http\Controllers\Hellow;
use Illuminate\Support\Facades\Route;


Route::get('/message',function(){
    return 'Hi this message chat';
});

Route::get('/hellow', [Hellow::class, 'index']);

Route::get('/messag',function(){
    return 'Hi sdfsdf this message chat';
});