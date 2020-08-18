<?php
declare(strict_types=1);

namespace App\Entity;

use Monolog\Logger;

class Master
{
    private int $id;
    private string $message;

    public function __construct(string $input, Transform $transform, Logger $logger)
    {
        $logger->info($input);
        $transformedInput = $transform->transform($input);
        $this->message = $transformedInput;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}