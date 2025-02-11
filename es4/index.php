<?php 
    include("./Studente.php");

    $s1 = new Studente("Mario", "Rossi", "123321");

    echo $s1->presentati();
?>