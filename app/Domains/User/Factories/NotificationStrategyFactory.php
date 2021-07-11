<?php


namespace App\Domains\User\Factories;


use App\Domains\User\Interfaces\NotificationStrategyInterface;
use Mehnat\User\Strategies\EmailNotificationStrategy;
use Mehnat\User\Strategies\SmsNotificationStrategy;

class NotificationStrategyFactory
{
    public function getStrategy($strategy)
    {
        switch ($strategy) {
            case 'SMS':
                return new SmsNotificationStrategy();
            case 'email':
                return new EmailNotificationStrategy();
        }
    }
}
