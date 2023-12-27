<?php

namespace App\Strategy;

abstract class FormatStrategy
{
    abstract public function format(array $data): array;
}