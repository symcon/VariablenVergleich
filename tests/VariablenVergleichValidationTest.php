<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class VariablenVergleichValidationTest extends TestCaseSymconValidation
{
    public function testValidateVariablenVergleich(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateVariablenVergleichModule(): void
    {
        $this->validateModule(__DIR__ . '/../VariablenVergleich');
    }
}