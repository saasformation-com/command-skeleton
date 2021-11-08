<?php

namespace App\MyCommand\Tests;

use App\MyCommand\MyCommand;
use App\MyCommand\MyCommandValidator;
use PHPUnit\Framework\TestCase;

class MyCommandValidatorTest extends TestCase
{
    /**
     * @test
     */
    public function checkValidateReturnsTrue(): void
    {
        $command = new MyCommand();
        $validator = new MyCommandValidator();

        $this->assertTrue($validator->validate($command));
    }
}
