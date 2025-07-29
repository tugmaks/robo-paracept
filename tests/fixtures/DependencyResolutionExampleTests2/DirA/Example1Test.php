<?php

namespace Tests\Codeception\Task\fixtures\DependencyResolutionExampleTests2\DirA;

use Codeception\Attribute\Depends;
use Codeception\Attribute\Group;
use PHPUnit\Framework\TestCase;

class Example1Test extends TestCase
{

    #[Depends('testB')]
    #[Group('example')]
    public function testA()
    {
        $this->markTestSkipped('Just a test ... test');
    }

    #[Depends('testA')]
    #[Group('example')]
    public function testB()
    {
        $this->markTestSkipped('Just a test ... test');
    }
}
