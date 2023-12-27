<?php

namespace App;

use App\Strategy\FormatStrategy;

interface ContextInterface
{
    public function __construct(array $objects);

    public function applyStrategy(FormatStrategy $strategy): array;
}
