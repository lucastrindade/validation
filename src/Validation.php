<?php
declare(strict_types=1);

namespace LucasTrindade\Validation;

class Validation
{
    public function notNull(string $data)
    {
        return $data !== null;
    }
}