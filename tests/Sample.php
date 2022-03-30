<?php

declare(strict_types=1);

namespace Tests\CodingStandard;

class Sample
{
    public const BAR = 'bar';

    public function __construct(
        string $first,
        string $second,
    ) {
    }

    public function foo(FooBar $fooBar): void
    {
        $fooBar
            ->setFoo('foo')
            ->setBar(self::BAR)
        ;
    }
}
