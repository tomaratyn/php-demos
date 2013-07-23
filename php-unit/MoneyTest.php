<?php

if (!defined("__PHPUNIT_PHAR__")) {
    require_once "phpunit.phar";
}

require_once "Money.php";

class MoneyTest extends PHPUnit_Framework_TestCase {

    public function testTimes() {
        $dollar = new Money(10);
        $tenDollars = new Money(20);
        $fiveDollars = new Money(5);
        $this->assertEquals($tenDollars, $dollar->times(2));
        $this->assertEquals($fiveDollars, $dollar->times(.5));
    }

    public function testConstructor() {
        $dollar = new Money(1, "CAD");
        $swissFranc = new Money(1, "CHF");
        $this->assertNotEquals($dollar, $swissFranc);
    }

}
