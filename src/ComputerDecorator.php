<?php

namespace App;

abstract  class ComputerDecorator implements ComputerStore
{

    public function __construct(private ComputerStore $computer)
    {
    }

    public function price(): int
    {
        return $this->computer->price();
    }
}