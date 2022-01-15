<?php

  namespace ehfazAdnan\PowerCalculator\Tests;

  include ("../src/PowerCalculator.php");

  use PHPUnit\Framework\TestCase;
  use ehfazAdnan\PowerCalculator\PowerCalculator;

  class PowerCalculatorTest extends TestCase{
      /** @test */
     public function convert_watt_and_hours_into_kwh(){
         $powerCalculator = PowerCalculator::fromWattAndHours(100,10);
         $this->assertEquals(1, $powerCalculator->intoKWH());
     }
  }

  // failed to solve the error today
  // https://www.youtube.com/watch?v=sqwwxVM9uko
  // composer test runs test case

?>