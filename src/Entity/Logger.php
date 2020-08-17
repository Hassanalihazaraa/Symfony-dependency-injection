<?php
declare(strict_types=1);

namespace App\classes;

class Logger
{
    public function log(string $message)
    {
        file_put_contents('../../log/log.info', $message, FILE_APPEND);
    }
}