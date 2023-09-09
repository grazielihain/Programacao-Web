<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/'.FOLDER.'/database/Database.php';

class ProfessorModel {

    private string $nome;
    private INT $idade;
    private $database;

    //Getter and Setter

    public function __construct(){
        $this->database = new Database();
    }

    public function listarModel() : array{
        
        $dadosArray = $this->database->executeSelect("SELECT * FROM professores");
       

        return $dadosArray;

    }

    public function salvarModel(string $name, int $idade){
      
        $sql = "INSERT INTO professores (name, idade) VALUES ('$name', '$idade')";
        $this->database->insert($sql); 
      
    }

    public function buscarpeloId(int $id){
        $professorArray = $this->database->executeSelect("SELECT * FROM professores where id = '$id'");
        return $professorArray[0];
    }
    public function atualizarModel(int $id, string $name, int $idade){
        $sql = "UPDATE professores set name='$name', idade='$idade' WHERE id='$id'";
        $this->database->insert($sql);
    }

    public function excluirModel(int $id){
        $sql = "DELETE FROM professores WHERE id='$id'";
        $this->database->insert($sql);
    }

}