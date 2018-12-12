<?php
declare(strict_types=1);

namespace LucasTrindade\Validation;

class SecurityTest extends \PHPUnit_Framework_TestCase
{
    public function testDataValidation()
    {
        $validation = new Validation();
        $this->assertTrue($validation->notNull('string de teste'));
    }
}