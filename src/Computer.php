<?php

namespace App;

class Computer implements ComputerStore
{
    CONST PRICE = 200;
    public function price(): int
    {
        return self::PRICE;
    }
}
