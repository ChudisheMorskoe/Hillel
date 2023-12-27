<?php

namespace App;

use App\Strategy\FormatStrategy;

class Context implements ContextInterface
{
    private array $objects;

    public function __construct(array $objects)
    {
        $this->objects = $objects;
    }

    public function applyStrategy(FormatStrategy $strategy): array
    {
        return $strategy->format($this->objects);
    }
}
