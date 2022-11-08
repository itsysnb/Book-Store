<?php

namespace App;

class CoreI3 extends ComputerDecorator
{
    public function price(): int
    {
        return 250 + $this->computer->price();
    }
}