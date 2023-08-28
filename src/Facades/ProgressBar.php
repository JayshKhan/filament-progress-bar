<?php

namespace Jayshkhan\ProgressBar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jayshkhan\ProgressBar\ProgressBar
 */
class ProgressBar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jayshkhan\ProgressBar\ProgressBar::class;
    }
}
