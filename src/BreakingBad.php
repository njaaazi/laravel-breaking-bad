<?php

namespace Njaaazi\BreakingBad;

use Njaaazi\BreakingBad\Api\Characters;
use Njaaazi\BreakingBad\Api\Deaths;
use Njaaazi\BreakingBad\Api\Episodes;
use Njaaazi\BreakingBad\Api\Quotes;

class BreakingBad
{
    public function characters()
    {
        return new Characters();
    }

    public function episodes()
    {
        return new Episodes();
    }

    public function quotes()
    {
        return new Quotes();
    }

    public function deaths()
    {
        return new Deaths();
    }
}
