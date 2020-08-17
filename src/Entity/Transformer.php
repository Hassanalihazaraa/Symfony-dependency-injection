<?php
declare(strict_types=1);

namespace App\classes;

use Transform;

class Transformer implements Transform
{
    public function transform(string $string): string
    {
        return str_replace('-', ' ', $string);
    }
}