<?php

namespace Mehnat\User\Entities;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Mehnat\Core\Traits\StatusTrait;

class User extends Authenticatable
{
    use StatusTrait;

    protected static function booted()
    {
        static::addGlobalScope('adult', function (Builder $builder) {
            $builder->where('age', '>', 17);
        });
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function adult(Builder $query): Builder
    {
        return $query->where('age', '>=', 18);
    }
}
