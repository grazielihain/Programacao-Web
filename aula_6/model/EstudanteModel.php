<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/'.FOLDER.'/database/Database.php';

class EstudanteModel {

    private string $nome;
    private INT $idade;
    private $database;

    //Getter and Setter

    public function __construct(){
        $this->database = new Database();
    }

    public function listarModel() : array{
            //$array = array(1, 2, 3, 4, 5);
            //$array = ["João", "Lucas", "Maria", "Clara"]

        $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");
       

        return $dadosArray;

    }

    public function salvarModel(string $name, int $idade){
       
        $sql = "INSERT INTO estudantes (name, idade) VALUES ('$name', '$idade')";
        $this->database->insert($sql); 
      
    }

}