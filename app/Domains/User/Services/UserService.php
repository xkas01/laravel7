<?php

namespace Mehnat\User\Services;

use App\Domains\User\Factories\NotificationStrategyFactory;
use Illuminate\Database\Eloquent\Builder;

class UserService
{
    public function filter(Builder $query): Builder
    {
        $user_name = request()->get('user_name', false);
        if ($user_name) {
            $query->where('username', 'like', '%user_name%');
        }
        return $query;
    }

    public function sort($query)
    {
        $key = request()->get('sort_key', 'created_at');
        $order = request()->get('sort_order', 'desc');
        $query->orderBy($key, $order);
        return $query;
    }

    public function notify($user, string $type)
    {
        $strategy = (new NotificationStrategyFactory())->getStrategy($type);
        $strategy->send();
    }
}
