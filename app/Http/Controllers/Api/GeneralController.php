<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Artisan;

class GeneralController extends Controller
{
    public function test(){
        $out2 = exec('composer update');
        $out3 = Artisan::call('migrate');
        Log::info("Build Success");
        Log::info("Out2 ". $out2);
        Log::info("Out3 ". $out3);
    }
}
