<?php

namespace Sitesurfer\TCOsdata\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sitesurfer\TCOsdata\TCOsdata
 */
class TCOsdata extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sitesurfer\TCOsdata\TCOsdata::class;
    }
}
