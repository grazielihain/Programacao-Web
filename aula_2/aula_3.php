<?php

class Estudante{
   private string $nome;
    
    public int $idade;

    //Tipos 
    //bool = booleano
    //float 
    //Datetime
    
    /**
     * comentario em bloco
     */ 

     public function __construct (int $idade, string $nome){
        $this->idade = $idade;
        $this->nome =  $nome;
     }

     public function setNome(string $n){
        $this->nome = $n;
     }

     public function getNome(){
        return $this->nome;
     }

     public function setIdade(int $i){
        $this->$i;
     }

     public function getIdade(){
        return $this->idade;
     }


}
 //== comparaçao igual  //===

 echo "<pre>"
$estudante = new Estudadante("Lucas", 20);


//$estudandte->setNome = "Lucas";
//&estudadnte->idade = 20;

var_dump($estudante);


