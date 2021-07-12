<?php


namespace App\Domains\User\Services;


use App\Domains\User\Interfaces\SmsGateInterface;

class SvgSmsGate
{
    public function send(array $phones, string $message): json
    {

    }

    public function getStatus(string $message_id): json
    {

    }
}
