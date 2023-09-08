<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/semipresencial_1/model/EstudanteModel.php";

class EstudanteController {

    public function listar() {
        $estudanteModel = new EstudanteModel();
        $estudantes = $estudanteModel->listarModel();
        $_REQUEST["estudantes"] = $estudantes;
        
        //render na View
        require_once $_SERVER ['DOCUMENT_ROOT'] . "/semipresencial_1/view/EstudanteView.php";

    }

    public function salvar() {
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            require_once $_SERVER ['DOCUMENT_ROOT'] . "/semipresencial_1/view/EstudanteForm.php";
        }elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
            // var_dump('qualquercoisa');
            // die;
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];       

            $estudanteModel = new EstudanteModel();
            $estudanteModel->salvarModel($nome, $idade);

            header('Location: http://localhost:8081/semipresencial_1/?controller=Estudante&acao=listar');
            exit();
        }
    }
}