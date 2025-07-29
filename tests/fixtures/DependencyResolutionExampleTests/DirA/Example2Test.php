<?php

namespace Tests\Codeception\Task\fixtures\DependencyResolutionExampleTests\DirA;

use Codeception\Attribute\Depends;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

class Example2Test extends TestCase
{


    #[Depends('testE')]
    #[Group('example')]
    public function testD()
    {
        self::assertTrue(true);
    }

    #[Group('example')]
    public function testE()
    {
        self::assertTrue(true);
    }
}
