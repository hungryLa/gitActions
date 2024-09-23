<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GeneralController extends Controller
{
    public function test(){
//        $out1 = exec('cd /var/www/www-root/data/www/clinic-dev.proviant-pay.ru/');
        $out5 = exec('php -v');
        $out4 = exec('pwd');
        $out2 = exec('composer update');
        $out3 = exec('php artisan migrate');
        Log::info("Build Success");
//        Log::info("Out1". $out1);
        Log::info("Out5". $out5);
        Log::info("Out4". $out4);
        Log::info("Out2". $out2);
        Log::info("Out3". $out3);
    }
}
