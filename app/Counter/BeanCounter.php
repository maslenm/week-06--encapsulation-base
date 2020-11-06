<?php

declare(strict_types=1);

namespace App\Counter;

class BeanCounter
{
    private $counter;

    public function __construct(Counter $counter)
    {
        $this->counter = $counter;
    }

    public function addBean()
    {
        $this->counter->increment();
        return $this;
    }

    public function howMany() : int
    {
     return $this->counter->count();
    }
};