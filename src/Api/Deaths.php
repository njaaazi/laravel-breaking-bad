<?php

namespace Njaaazi\BreakingBad\Api;

class Deaths extends AbstractApi
{

    public function all()
    {
        return $this->call('deaths');
    }

    public function author(string $name)
    {
        return $this->call('death', [
            'name' => $name
        ]);
    }

    public function count()
    {
        return $this->call('death-count');
    }

    public function random()
    {
        return $this->call('random-death');
    }

}
