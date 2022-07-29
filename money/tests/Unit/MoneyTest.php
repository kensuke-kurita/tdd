<?php

declare(strict_types=1);

namespace KensukeKurita\Tdd\Money\Tests\Unit;

use KensukeKurita\Tdd\Money\src\Dollar;
use KensukeKurita\Tdd\Money\src\Franc;
use KensukeKurita\Tdd\Money\src\Money;
use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication(){
        $five = (New Money)->dollar(5);
        $this->assertObjectEquals(New Dollar(10), $five->times(2));
        $this->assertObjectEquals(New Dollar(15), $five->times(3));
    }

    public function testEquality(){
        $this->assertTrue((New Dollar(5))->equals(New Dollar(5)));
        $this->assertFalse((New Dollar(5))->equals(New Dollar(6)));
        $this->assertTrue((New Franc(5))->equals(New Franc(5)));
        $this->assertFalse((New Franc(5))->equals(New Franc(6)));
        $this->assertFalse((new Dollar(5))->equals(new Franc(5)));
    }

    public function testFrancMultiplication(){
        $five = New Franc(5);
        $this->assertObjectEquals(New Franc(10), $five->times(2));
        $this->assertObjectEquals(New Franc(15), $five->times(3));
    }
}