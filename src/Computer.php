<?php

namespace App;

class Computer implements ComputerStore
{
    public function price(): int
    {
        return 2500;
    }
}