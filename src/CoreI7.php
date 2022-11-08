<?php

namespace App;

class CoreI7 extends ComputerDecorator
{
    public function price(): int
    {
        return 1000 + $this->computer->price();
    }
}