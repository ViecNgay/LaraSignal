<?php

namespace ViecNgay\LaraSignal\Facades;

use Illuminate\Support\Facades\Facade;

class LaraSignal extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'larasignal';
    }
}
