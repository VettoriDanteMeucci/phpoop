<?php 
    include("./Persona.php");

    class Studente extends Persona{
        private $matricola;
        
        function __construct($nome, $cognome, $matricola){
            $this->matricola = $matricola;
            parent::__construct($nome, $cognome);
        }

        public function presentati(): string{
            return parent::presentati() . " e la mia matricola è " . $this->matricola; 
        }
    }
?>