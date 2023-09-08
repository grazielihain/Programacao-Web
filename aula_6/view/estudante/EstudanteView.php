<?php $estudante = $_REQUEST['estudantes']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Meu site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar">Estudantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar">Professores</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
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
                <a href="/aula_6/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar Estudante</a>
            </div>
        </div>
        <hr>

        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nº Cadastro</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudante as $key => $estudanteAtual) { ?>
                <tr>
                    <td>
                        <?php echo $estudanteAtual["id"]; ?>
                    </td>
                    <td>
                        <?php echo $estudanteAtual["name"]; ?>
                    </td>
                    <td>
                        <?php echo $estudanteAtual["idade"]; ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>



</body>

</html>