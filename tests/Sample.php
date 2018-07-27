<?php

declare(strict_types=1);

namespace Tests\CodingStandard;

final class Sample
{
    public function foo(): void
    {
        $bar = null;

        if ($bar === null) {
            return;
        }
    }
}
