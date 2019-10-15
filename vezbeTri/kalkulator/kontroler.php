<?php
include "kalkulator.php";

if(isset($_POST['izracunaj'])){
    $operator = $_POST['operator'];
    $broj1 = $_POST['broj1'];
    $broj2 = $_POST['broj2'];

    $kalkulator = new Kalkulator($broj1,$broj2,$operator);
    echo $kalkulator->izracunaj();
}

?>