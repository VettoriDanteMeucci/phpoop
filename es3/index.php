<?php 
    include("./Cane.php");

    $fuffy = new Cane("toy", "fuffy");

    echo $fuffy->getVerso() . " da parte di " . $fuffy->getNome();
?>