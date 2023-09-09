<?php $professores = $_REQUEST['professores']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
<?php require_once $_SERVER ['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>
    <div class="container">
        <div class="text-center">
            <h2>SEMANA DA ACESSIBILIDADE</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-8">
                <img src="https://anitazimmermann.com.br/wp-content/uploads/2021/10/Imagem1.png"
                    alt="Imagem com símbolos de acessibilidade de cadeirante, deficiência auditiva, deficiência cerebral, deficiência auditiva com símbolo de Libras, deficiência visual e símbolo de braille">
            </div>
            <div class="col-4 p-5">
                <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=salvar" class="btn btn-success">Cadastrar Professor</a>
            </div>
        </div>
        <hr>

        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nº Cadastro</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($professores as $key => $professorAtual) { ?>
                <tr>
                    <td>
                        <?php echo $professorAtual["id"]; ?>
                    </td>
                    <td>
                        <?php echo $professorAtual["name"]; ?>
                    </td>
                    <td>
                        <?php echo $professorAtual["idade"]; ?>
                    </td>
                    <td>
                        <a href="/<?php echo FOLDER; ?>?controller=Professor&acao=editar&id=<?php echo $professorAtual['id']; ?>" class="btn btn-primary">Editar</a>
                        <a href="/<?php echo FOLDER; ?>?controller=Professor&acao=excluir&id=<?php echo $professorAtual['id']; ?>" class="btn btn-primary">Excluir</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>



</body>

</html>