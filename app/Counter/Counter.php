<?php

declare(strict_types=1);

namespace App\Counter;

class Counter 
{
    private $total = 0;

    public function increment() : void
    {
        $this->total += 1;
    }

    public function count() : int
    {
        return $this->total;
    }
};