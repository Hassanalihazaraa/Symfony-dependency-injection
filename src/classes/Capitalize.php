<?php
declare(strict_types=1);

namespace App\classes;

use Transform;

class Capitalize implements Transform
{
    public function transform(string $string): string
    {
        $words = "hello world";
        return preg_replace_callback('/(\w)(.?)/', fn() => $this->transform(strtoupper($words[2]) . $words[1]), $words);
    }
}