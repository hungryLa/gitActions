<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GeneralController extends Controller
{
    public function test(){
        $out1 = exec('git pull origin main');
        $out2 = exec('composer update');
        $out3 = exec('php artisan migrate');
        Log::info("Build Success");
        Log::info("Out1". $out1);
        Log::info("Out2". $out2);
        Log::info("Out3". $out3);
    }
}
