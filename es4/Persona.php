<?php 
    class Persona{
        private $nome;
        private $cognome;

        public function __construct($nome, $cognome){
            $this->nome = $nome;
            $this->cognome = $cognome;
        }

        public function presentati(): string{
            return ("Salve sono " . $this->nome . " " . $this->cognome);
        } 
    }
?>