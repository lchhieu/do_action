<?php

namespace Lchhieu\DoAction\Facades;

use Illuminate\Support\Facades\Facade;
use Lchhieu\DoAction\Hooks\Filters as HookFilters;

class Filters extends Facade
{
    protected static function getFacadeAccessor()
    {
        return HookFilters::class;
    }
}
