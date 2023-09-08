<?php $estudante = $_REQUEST['estudantes']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h2>SEMANA DA ACESSIBILIDADE</h2>
        </div>

        <div class="row justify-content-center">
            <img src="https://anitazimmermann.com.br/wp-content/uploads/2021/10/Imagem1.png" alt="Imagem com símbolos de acessibilidade de cadeirante, deficiência auditiva, deficiência cerebral, deficiência auditiva com símbolo de Libras, deficiência visual e símbolo de braille">
        </div>
        
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">#</th>
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