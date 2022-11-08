<?php

namespace App;

class CoreI5 extends ComputerDecorator
{
    public function price(): int
    {
        return 500 + $this->computer->price();
    }
}