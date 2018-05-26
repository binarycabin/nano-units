<?php

namespace BinaryCabin\NanoUnits\Facades;

use Illuminate\Support\Facades\Facade;

class NanoUnits extends Facade
{
    protected static function getFacadeAccessor() {
        return 'nanounits';
    }
}