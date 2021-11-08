<?php

namespace App\MyCommand;

use SaaSFormation\Vendor\CommandBus\Command;

class MyCommand implements Command
{
    public function commandName(): string
    {
        return "MyCommand";
    }

    public function toArray(): array
    {
        return [];
    }
}
