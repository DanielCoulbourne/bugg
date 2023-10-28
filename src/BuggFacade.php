<?php

namespace Thunk\Bugg;

use Illuminate\Support\Facades\Facade;

class BuggFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bugg';
    }
}
