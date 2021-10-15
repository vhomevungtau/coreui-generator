<?php

namespace App\Library\Service;

use App\Models\Server;
use Illuminate\Support\Facades\Http;


class Sms implements SmsServiceInterface
{

    protected $data;

    protected $url;

    public function __construct()
    {
        $this->data = Server::first()->attributesToArray();
        $this->url = $this->data['url'];
    }


    public function sendSingleMessage($number, $message, $device = 0, $schedule = null, $isMMS = false, $attachments = null, $prioritize = false)
    {
        return Http::get($this->url, $this->data);
    }

}
