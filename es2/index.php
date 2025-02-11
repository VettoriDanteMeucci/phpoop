<?php 
    include ("./Automobile.php");

    $auto = new Automobile(2018, "Toyota", "CH-R");

    echo $auto->getAnno() . " " . $auto->getMarca() . " " . $auto->getModello();
?>