<?php

namespace Tests\Codeception\Task\fixtures\DependencyResolutionExampleTests\DirB;

use Codeception\Attribute\Group;
use PHPUnit\Framework\TestCase;

class Example3Test extends TestCase
{

    #[Group('example')]
    public function testF()
    {
        self::assertTrue(true);
    }

    #[Group('example')]
    public function testG()
    {
        self::assertTrue(true);
    }
}
