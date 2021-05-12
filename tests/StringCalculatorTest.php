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

    public function testAddIfStringHasUnknownAmountNumbers(): void
    {
        $numbers = new StringCalculator();

        self::assertSame(14, $numbers->Add("2,2,5,5"));
    }

    public function testAddHandleNewLines(): void
    {
        $numbers = new StringCalculator();

        self::assertSame(14, $numbers->Add("2\n2,5,5"));
    }

    public function testAddSupportDifferentDelimeters(): void
    {
        $numbers = new StringCalculator();

        self::assertSame(14, $numbers->Add("//$\n2$2$5$5"));
    }
}
