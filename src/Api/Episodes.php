<?php

namespace Njaaazi\BreakingBad\Api;

class Episodes extends AbstractApi
{
    public function all()
    {
        return $this->call('episodes');
    }

    public function episode(int $id)
    {
        return $this->call('episodes/' . $id);
    }

    public function series(string $series)
    {
        return $this->call('episodes', [
            'series' => $series,
        ]);
    }
}
