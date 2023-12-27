<?php

namespace App\Strategy;

class FirstFormatStrategy extends FormatStrategy
{

    public function format(array $data): array
    {
        $result = ['name' => 'first', 'text' => ''];

        foreach ($data as $object) {
            foreach ($object as $property => $value) {
                $result['text'] .= "$property - $value\n ";

            }
            $result['text'] .= "_______\n";
        }
        return $result;
    }
}