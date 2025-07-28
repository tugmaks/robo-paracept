<?php

namespace Tests\Codeception\Task\fixtures\DependencyResolutionExampleTests\DirA;

use Codeception\Attribute\Depends;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Group;

class Example1Test extends TestCase
{

    #[Depends('testB')]
    #[Group('example')]
    public function testA()
    {
        self::assertTrue(true);
    }


    #[Group('example')]
    public function testB()
    {
        self::assertTrue(true);
    }

    #[Depends('testA')]
    #[Group('example')]
    public function testC()
    {
        self::assertTrue(true);
    }
}
