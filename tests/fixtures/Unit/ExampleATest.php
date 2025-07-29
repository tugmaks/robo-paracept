<?php

namespace Tests\Codeception\Task\fixtures\Unit;

use Codeception\Attribute\Depends;
use Codeception\Attribute\Group;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Group as PHPUnitGroup;

class ExampleATest extends TestCase
{

    #[Depends('testB')]
    #[Group('foo')]
    #[Group('bar')]
    #[PHPUnitGroup('example')]
    public function testA(): void
    {
        $this->assertTrue(false);
    }

    #[Group('foo')]
    #[Group('bar')]
    #[Group('no')]
    #[PHPUnitGroup('example')]
    public function testB(): void
    {
        $this->assertTrue(false);
    }
}
