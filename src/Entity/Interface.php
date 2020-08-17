<?php
declare(strict_types=1);

interface Transform
{
    public function transform(string $string): string;
}