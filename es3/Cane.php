<?php 
    include("./Animale.php");

    class Cane extends Animale{
        private $razza;

        function __construct($razza, $nome){
            $this->razza = $razza;
            parent::__construct($nome);
        }

        public function getVerso(){
            return "bau";
        }
    }
?>