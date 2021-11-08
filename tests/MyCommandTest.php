<?php

namespace App\MyCommand\Tests;

use App\MyCommand\MyCommand;
use PHPUnit\Framework\TestCase;

class MyCommandTest extends TestCase
{
    /**
     * @test
     */
    public function checkToArray(): void
    {
        $myCommand = new MyCommand();

        $this->assertEquals([], $myCommand->toArray());
    }
}
