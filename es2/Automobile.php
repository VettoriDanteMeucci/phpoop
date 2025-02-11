<?php 
    include("./Veicolo.php");
    class Automobile extends Veicolo{
        private $modello;

        public function __construct($anno, $marca, $modello) {
            parent::__construct($anno, $marca);
            $this->modello = $modello;
        }

        public function getModello(){
            return $this->modello;
        }

        public function jsonSerialize(){
            return
            [
                "model"=> $this->modello
            ];
        }

    }
?>