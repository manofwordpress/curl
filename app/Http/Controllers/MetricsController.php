<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use sharkas\Curl\Quickmetric;

class MetricsController extends Controller
{
    public function test(){
        return Quickmetric::event('Test Event',1.25);
    }
}
