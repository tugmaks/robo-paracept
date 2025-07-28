<?php

namespace Tests\Codeception\Task\fixtures\Cests\DirB;

use Codeception\Attribute\Group;

class ExampleACest
{
    #[Group('foo')]
    #[Group('bar')]
    #[Group('example')]
    public function testExampleGoFrom(): void
    {
        // nothing
    }
}
