<?php
class basa {
    public $A, $B, $res;
    public function __construct ($A,$B){
        $this -> A = $A;
        $this -> B = $B;
    }
    function sum () {
        $this -> res = $this -> A + $this -> B;
    }
};
?>
