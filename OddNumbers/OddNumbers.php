<?php

/** * get the number which occurs odd times in the source array 
 * * @param $arrValues array * @return int */
function getOddNumber($srcValues) {
    for ($i = 0; $i < count($srcValues); $i++) {
        $value_checking = $srcValues[$i];
        $count = 1;
        for ($j = $i + 1; $j < count($srcValues); $j++) {
            if ($value_checking === $srcValues[$j]) {
                $count++;
            }
        }
        if ($count % 2) {
            return $value_checking;
        }
    }
}

//require './vendor/autoload.php';

//class OddNumberTest extends PHPUnit\Framework\TestCase{
class OddNumberTest extends \PHPUnit_Framework_TestCase{

    public function testOddNumber() {

        $result = getOddNumber([2, 5, 9, 1, 5, 1, 8, 2, 8]);
        $this->assertEquals(9, $result);
        $result = getOddNumber([2, 3, 4, 3, 1, 4, 5, 1, 4, 2, 5]);
        $this->assertEquals(4, $result);
    }

}
//
//$OddNumberTest = new OddNumberTest();
//$OddNumberTest->testOddNumber();