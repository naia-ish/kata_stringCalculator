<?php

namespace App\Tests;

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{

    public function testAddIfEmptyString (): void
    {
        $numbers = new StringCalculator();

        self::assertSame(0, $numbers->Add(""));
    }
}
