<?php

declare(strict_types=1);

namespace Gsteel\Package;

final class Thing
{
    /** @var string */
    private $name;

    private function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function fromString(string $name): self
    {
        return new self($name);
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
