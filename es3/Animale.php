<?php 
    abstract class Animale{
        private $nome;

        public function __construct($nome){
            $this->nome = $nome;
        }

        abstract public function getVerso();

        public function getNome(){
            return $this->nome;
        } 
    }
?>