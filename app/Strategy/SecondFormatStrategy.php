<?php

namespace App\Strategy;

class SecondFormatStrategy extends FormatStrategy
{

    public function format(array $data): array
    {
        $result = ['name' => 'Second', 'text' => ''];

        foreach ($data as $object) {
            foreach ($object as $property => $value) {
                $formattedProperty = '|' . $property . '|';
                $result['text'].="$formattedProperty$value\n";
            }
        $result['text'].="_______\n";
        }
        return $result;
    }
}