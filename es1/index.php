<?php 
    include("./Alunni.php");

    $a1 = new Alunni("Mario", "Rossi", 13);
    $a2 = new Alunni("Piero", "Elani", 16);
    $a3 = new Alunni("Luigi", "Lapis", 17);
    $a4 = new Alunni("Dario", "Prode", 4);
    $alunni = [$a1, $a2, $a3, $a4];

    for($i = 0; $i<count($alunni); $i++){
        echo $alunni[$i]->getInfo() . "<br>";
    }

?>