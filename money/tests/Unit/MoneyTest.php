<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\Tests\Unit;

use KensukeKurita\Tdd\Money\src\Dollar;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication(){
        $five = New Dollar(5);
        self::assertEquals(New Dollar(10), $five->times(2));
        self::assertEquals(New Dollar(15), $five->times(3));
    }

    public function testEquality(){
        self::assertTrue((New Dollar(5))->equals(New Dollar(5)));
        self::assertFalse((New Dollar(5))->equals(New Dollar(6)));
    }
}