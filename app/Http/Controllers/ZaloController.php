<?php

namespace App\Http\Controllers;

use Zalo\Zalo;
use Illuminate\Http\Request;

class ZaloController extends Controller
{

    protected $config;

    public function __construct($config)
    {
        $this->config = [
            'app_id' => env('ZALO_ID '),
            'app_secret' => env('ZALO_SECRET '),
            'callback_url' => env('ZALO_URL ')
        ];
    }


}
