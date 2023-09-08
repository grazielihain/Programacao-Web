<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/aula_3/model/EstudanteModel.php";

class EstudanteController {
    public function listar() {
        $estudanteModel = new EstudanteModel();
        $estudantes = $estudanteModel->listarModel();

        $_REQUEST["estudantes"] = $estudantes;

        require_once $_SERVER ['DOCUMENT_ROOT'] . "/aula_3/view/EstudanteView.php";

    }

    public function salvar() {

        $nome = $_GET['nome'];
        $idade = $_GET['idade'];

        $estudanteModel = new EstudanteModel();
        $estudanteModel->salvarModel($nome, $idade);
    }
}