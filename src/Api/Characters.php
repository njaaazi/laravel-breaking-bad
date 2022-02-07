<?php

namespace Njaaazi\BreakingBad\Api;

class Characters extends AbstractApi
{
    public function all(){
        return $this->call('characters');
    }

    public function character(int $id)
    {
        return $this->call('characters/' .  $id);
    }

    public function category(string $category)
    {
        return $this->call('characters', [
            'category' => $category
        ]);
    }

    public function random()
    {
        return $this->call('character' . '/random');
    }

    public function name(string $name)
    {
        return $this->call('characters', [
            'name' => $name
        ]);
    }
}
