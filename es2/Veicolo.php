<?php 
    class Veicolo{
        private $anno;
        private $marca;

        public function __construct($anno, $marca){
            $this->anno = $anno;
            $this->marca = $marca;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getAnno(){
            return $this->anno;
        }
    }
?>