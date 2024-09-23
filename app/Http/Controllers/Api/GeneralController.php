<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Process;

class GeneralController extends Controller
{
    public function test(){
        exec('cd /var/www/www-root/data/www/clinic-dev.proviant-pay.ru/');
        $out1 = exec('git pull origin main');
//        $proc = new Process(['git', 'pull']);
//        $out2 = exec('composer update');
//        $out3 = Artisan::call('migrate');
        Process::run('bash deploy.sh');
        Process::run('cd /var/www/www-root/data/www/clinic-dev.proviant-pay.ru/');
        Log::info("Build Success");
//        Log::info("Out2 ". $out2);
        Log::info("Out1 ". $out1);
//        Log::info("Out3 ". $out3);
    }
}
