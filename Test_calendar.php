<?php
include "Calendar.php";

use PHPUnit\Framework\TestCase;

class Test_calendar extends TestCase{
    private $Calendar;

    public function setUp():void{
        $this->Calendar = new Calendar();
    }

    public function testAdd1(){
        $this->assertEquals("Wednesday",$this->Calendar->showdate(03,02));
    }
    public function testAdd2(){
        $this->assertEquals("Friday",$this->Calendar->showdate(15,01));
    }
    public function testAdd3(){
        $this->assertEquals("Tuesday",$this->Calendar->showdate(20,04));
    }
}