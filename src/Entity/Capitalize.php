<?php
declare(strict_types=1);

namespace App\classes;

use Transform;

class Capitalize implements Transform
{
    public function transform(string $string): string
    {
        return preg_replace_callback('/(\w)(.?)/', fn($words) => strtoupper($words[2] . $words[1]), $string);
    }
}