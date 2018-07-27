<?php

declare(strict_types=1);

namespace Tests\CodingStandard;

class Sample
{
    public function foo(): void
    {
        if (\count(['foo', 'bar']) === 2) {
            return;
        }
    }
}
