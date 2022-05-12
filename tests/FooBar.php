<?php

declare(strict_types=1);

namespace Tests\CodingStandard;

final class FooBar
{
    private string $foo;

    private string $bar;

    public function setFoo(string $foo): self
    {
        $this->foo = $foo;

        return $this;
    }

    public function setBar(string $bar): self
    {
        $this->bar = $bar;

        return $this;
    }

    public function isBaz(): bool
    {
        return
            str_contains($this->foo, 'baz') &&
            str_contains($this->bar, 'baz')
        ;
    }
}
