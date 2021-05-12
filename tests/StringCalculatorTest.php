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

    public function testAddIfStringHasOneNumber(): void
    {
        $numbers = new StringCalculator();

        self::assertSame(1, $numbers->Add("1"));
    }

    public function testAddIfStringHasTwoNumbers(): void
    {
        $numbers = new StringCalculator();

        self::assertSame(3, $numbers->Add("1,2"));
    }

}
