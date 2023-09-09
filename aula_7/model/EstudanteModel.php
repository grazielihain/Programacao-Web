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
           
        $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");
       

        return $dadosArray;

    }

    public function salvarModel(string $name, int $idade){
       
        $sql = "INSERT INTO estudantes (name, idade) VALUES ('$name', '$idade')";
        $this->database->insert($sql); 
      
    }

    public function buscarpeloId(int $id){
        $estudanteArray = $this->database->executeSelect("SELECT * FROM estudantes where id = '$id'");
        return $estudanteArray[0];
    }
    public function atualizarModel(int $id, string $name, int $idade){
        $sql = "UPDATE estudantes set name='$name', idade='$idade' WHERE id='$id'";
        $this->database->insert($sql);
    }

    public function excluirModel(int $id){
        $sql = "DELETE FROM estudantes WHERE id='$id'";
        $this->database->insert($sql);
    }
}