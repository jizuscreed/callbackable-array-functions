<?php

use jizuscreed\CallbackableArrayFunctions\ArrayUnique;

class ArrayUniqueTest extends \PHPUnit\Framework\TestCase
{
    public function testRun()
    {
        $array = [
            new TmpClass('test 1'),
            new TmpClass('test 2'),
            new TmpClass('test 5'),
            new TmpClass('test 2'),
            new TmpClass('test 3'),
            new TmpClass('test 8'),
            new TmpClass('test 1'),
            new TmpClass('test 4'),
            new TmpClass('test 6'),
        ];

        $array = ArrayUnique::run($array, function(TmpClass $var){
            return $var->value;
        });

        $this->assertCount(7, $array);
        $this->assertEquals("test 1", $array[0]->value);
        $this->assertEquals("test 2", $array[1]->value);
        $this->assertEquals("test 5", $array[2]->value);
        $this->assertEquals("test 3", $array[4]->value);
        $this->assertEquals("test 8", $array[5]->value);
        $this->assertEquals("test 4", $array[7]->value);
        $this->assertEquals("test 6", $array[8]->value);
    }
}

class TmpClass
{
    public $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
}