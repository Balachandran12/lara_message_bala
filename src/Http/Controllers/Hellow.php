<?php

namespace BalachandranLaraMessage\Message\Http\Controllers;

use App\Http\Controllers\Controller;

class Hellow extends Controller
{
    public function index(){
        
        return view('message::message1');
    }
}