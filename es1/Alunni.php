<?php 
    class Alunni implements JsonSerializable{
        protected $name;
        protected $surname;
        protected $age;

        public function __construct($name, $surname, $age){
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
        }

        public function jsonSerialize(): array{
            return [
                "name" => $this->name,
                "surname" => $this->surname,
                "age" => $this->age
            ];
        }

        public function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getAge(){
            return $this->age;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function setSurname($surname){
            $this->surname = $surname;
        }

        public function setAge($age){
            $this->age = $age;
        }
    }
?>