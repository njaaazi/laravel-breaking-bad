<?php

namespace Njaaazi\BreakingBad\Facades;

use Illuminate\Support\Facades\Facade;
use Njaaazi\BreakingBad\BreakingBad as BreakingBadClient;

/**
 * @see BreakingBadClient
 * @method static characters()
 * @method static episodes()
 * @method static quotes()
 * @method static deaths()
 *
 */
class BreakingBad extends Facade
{
    protected static function getFacadeAccessor()
    {
        return BreakingBadClient::class;
    }
}
