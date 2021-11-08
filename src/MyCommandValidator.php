<?php

namespace App\MyCommand;

use SaaSFormation\Vendor\CommandBus\Command;
use SaaSFormation\Vendor\CommandBus\Validator;

class MyCommandValidator implements Validator
{
    public function validate(Command $command): bool
    {
        return true;
    }
}
