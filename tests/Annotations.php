<?php

declare(strict_types=1);

namespace Tests\CodingStandard;

final class Annotations
{
    /**
     * @param int $bar
     * @param string $baz
     * @phpstan-param string $baz
     * @psalm-param string $baz
     *
     * @return string[]
     * @phpstan-return string<int, string>
     * @psalm-return string<int, string>
     */
    public function foo($bar, $baz)
    {
        /**
         * Some comment
         *
         * @var int $key
         * @phpstan-var int $key
         * @psalm-var int $key
         */
        $key = --$bar;

        return [$key => $baz];
    }
}
