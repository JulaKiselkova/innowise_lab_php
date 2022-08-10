<?php

namespace src;

class Task12
{
    private $_fval, $_sval;
    public function __construct( $fval, $sval ) {
        $this->_fval = $fval;
        $this->_sval = $sval;
    }
    public function add() {
        $res = $this->_fval + $this->_sval;
        return $this->_fval + $this->_sval;
    }
    public function subtract() {
        $res = $this->_fval - $this->_sval;
        return $this->_fval - $this->_sval;
    }
    public function multiply() {
        $res = $this->_fval * $this->_sval;
        return $this->_fval * $this->_sval;
    }
    public function divide() {
        $res = $this->_fval / $this->_sval;
        return $this->_fval / $this->_sval;
    }

//    public function divideBy($value) {
//        $res = $res / $value;
//        return $res;
//    }
//    public function multiplyBy() {
//        return $this->_fval * $this->_sval;
//    }
}

$mycalc = new Task12(12, 6);
echo $mycalc->add(); // Displays 18
echo $mycalc->multiply(); // Displays 72
// Calculation by chain
//echo $mycalc->add()->divideBy(9); // Displays 2 ( (12+6)/9=2 )

?>
