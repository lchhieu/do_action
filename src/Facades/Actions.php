<?php

namespace Lchhieu\DoAction\Facades;

use Illuminate\Support\Facades\Facade;
use Lchhieu\DoAction\Hooks\Actions as HookActions;

class Actions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return HookActions::class;
    }
}
