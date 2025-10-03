<?php

namespace Developing Sonder\Putio\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Developing Sonder\Putio\Putio
 */
class Putio extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Developing Sonder\Putio\Putio::class;
    }
}
