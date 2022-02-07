<?php

namespace Njaaazi\BreakingBad\Api;

class Quotes extends AbstractApi
{
    public function all()
    {
        return $this->call('quotes');
    }

    public function quote(int $id)
    {
        return $this->call('quotes/' . $id);
    }

    public function series(string $name)
    {
        return $this->call($this->endpoint, [
            'series' => $name,
        ]);
    }

    public function random()
    {
        return $this->call('quote/random');
    }

    public function author(string $name)
    {
        return $this->call('quote', [
            'author' => $name,
        ]);
    }

    public function randomAuthor(string $author)
    {
        return $this->call('quote', [
            'random' => $author,
        ]);
    }
}
