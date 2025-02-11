<?php 
    header("content-type: application/json");
    include ("./Automobile.php");

    $auto = new Automobile(2018, "Toyota", "CH-R");

    echo $auto->jsonSerialize();
?>