<?php

namespace Tests\Codeception\Task\fixtures\Cests\DirC;

use Codeception\Attribute\Group;

class ExampleACest
{
    #[Group('bar')]
    #[Group('no')]
    #[Group('example')]
    public function testExampleStayHere(): void
    {
        // nothing
    }
}
