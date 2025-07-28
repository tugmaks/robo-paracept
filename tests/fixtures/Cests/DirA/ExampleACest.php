<?php

namespace Tests\Codeception\Task\fixtures\Cests\DirA;

use Codeception\Attribute\Group;

class ExampleACest
{
    #[Group('foo')]
    #[Group('bar')]
    #[Group('no')]
    #[Group('example')]
    public function testExampleGoTo(): void
    {
        // nothing
    }
}
