<?php

namespace App;

abstract  class ComputerDecorator implements ComputerStore
{

    public function __construct(protected ComputerStore $computer)
    {
    }

    public function price(): int
    {
        return $this->computer->price();
    }
}