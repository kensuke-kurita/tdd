<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\Tests\Unit;

use KensukeKurita\Tdd\Money\src\Franc;
use KensukeKurita\Tdd\Money\src\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication(){
        $five = Money::dollar(5);
        $this->assertObjectEquals(Money::dollar(10), $five->times(2));
        $this->assertObjectEquals(Money::dollar(15), $five->times(3));
    }

    public function testEquality(){
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));
        $this->assertTrue((New Franc(5))->equals(New Franc(5)));
        $this->assertFalse((New Franc(5))->equals(New Franc(6)));
        $this->assertFalse((Money::dollar(5))->equals(new Franc(5)));
    }

    public function testFrancMultiplication(){
        $five = Money::franc(5);
        $this->assertObjectEquals(New Franc(10), $five->times(2));
        $this->assertObjectEquals(New Franc(15), $five->times(3));
    }
}