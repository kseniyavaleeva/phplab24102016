<?php
require_once 'basa.php';
class pod extends basa {
    function umn () {
        $this -> res = $this -> A * $this -> B;
    }
};
?>