<?php

namespace Mehnat\Core\Traits;

use Illuminate\Database\Query\Builder;
use phpDocumentor\Reflection\Types\Boolean;

trait StatusTrait
{
    private $STATUS_ACTIVE = 'active';
    private $STATUS_DISABLED = 'disabled';

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', $this->STATUS_ACTIVE);
    }

    public function scopeDisabled(Builder $query): Builder
    {
        return $query->where('status', $this->STATUS_DISABLED);
    }

    public function activate(Builder $query): Boolean
    {
        return $query->update(['status' => $this->STATUS_ACTIVE]);
    }

    public function disable(Builder $query): Boolean
    {
        return $query->update(['status' => $this->STATUS_DISABLED]);
    }
}
