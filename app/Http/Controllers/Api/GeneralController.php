<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GeneralController extends Controller
{
    public function test(){
        shell_exec('git pull origin main');
        shell_exec('composer update');
        shell_exec('php artisan migrate');
        Log::info("Build Success");
    }
}
