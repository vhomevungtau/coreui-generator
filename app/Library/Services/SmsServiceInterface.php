<?php

namespace App\Library\Service;

use PhpParser\Builder\Interface_;

Interface SmsServiceInterface
{
    public function sendSingleMessage($number, $message, $device = 0, $schedule = null, $isMMS = false, $attachments = null, $prioritize = false);
}
