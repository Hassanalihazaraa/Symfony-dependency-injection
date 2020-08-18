<?php
declare(strict_types=1);

namespace App\Entity;

class Capitalize implements Transform
{
    public function transform(string $string): string
    {
        return preg_replace_callback('/(\w)(.?)/', fn($string) => strtoupper($string[2] . $string[1]), $string);
    }
}