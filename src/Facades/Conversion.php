<?php

namespace Auresbug\Media\Facades;

use Illuminate\Support\Facades\Facade;
use Auresbug\Media\ConversionRegistry;

class Conversion extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ConversionRegistry::class;
    }
}
