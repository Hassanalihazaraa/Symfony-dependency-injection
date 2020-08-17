<?php
declare(strict_types=1);

namespace App\classes;

use Transform;

class Transformer implements Transform
{
    public function transform(string $string): string
    {
        $word = "hello world i love to code";
        return $this->transform(str_replace('-', ' ', $word));
    }
}