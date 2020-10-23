<?php
require 'Math.php';
class Calculator
{
    private $math;

    function __construct() {
        $this->math = new Math();
    }

    public function do_subtract($a, $b)
    {
        
        if(is_int($a) && is_int($b)) {
          return $this->math->subtract($a, $b); 
        }
        return "Eror";
    }
}
?>