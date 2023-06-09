<?php

declare(strict_types=1);

namespace Tests\CodingStandard;

/**
 * @phpstan-template T
 * @psalm-template T
 * @template T
 * @template-extends \IteratorAggregate<T>
 * @extends \IteratorAggregate<T>
 * @template-implements \IteratorAggregate<T>
 * @implements \IteratorAggregate<T>
 * @template-covariant T
 * @psalm-template-covariant T
 */
final class Generics
{
}
