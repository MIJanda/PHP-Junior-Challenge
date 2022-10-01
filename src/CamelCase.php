<?php

namespace App;

class CamelCase 
{
    // accounts for first word in the camelcase string
    public int $count = 1; 

    public function numberOfWords (string $camelStr): int {
        for ($i = 0; $i < strlen($camelStr) ; $i++) {
            if (preg_match('/[A-Z]/', $camelStr[$i])) {
                $this->count += 1;
            }
        }

        return $this->count;
    }
}

$camel = new CamelCase();

echo $camel->numberOfWords('saveChangesInTheEditor') . "\n";