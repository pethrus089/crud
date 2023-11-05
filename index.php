<?php
include 'conexao.php';
session_start();

if ($_SESSION['loggedin'] != true) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <title>Lista</title>
</head>

<style>
    .inline-80 {
        display: inline-block;
        width: 80px;
    }
</style>

<body>
    <div class="container" id="menu">
        <a href="cadastro.php" class="btn btn-default">Adcionar Cadastro</a> &nbsp;
        <a href="https://pethrus.000webhostapp.com/index.html" class="btn btn-default">Voltar ao Portifólio</a> &nbsp;
        <a href="login.php" class="btn btn-default">logout</a> &nbsp;
    </div>
    <div class="container" id="listing">
        <h3>Lista</h3>
        <?php
        global $conn;
        $consulta = 'select *from usuarios';
        $resultado = $conn->query($consulta);


        if ($resultado) {
            $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);


            foreach ($usuarios as $usuario) {
                ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $usuario['id'] ?></td>
                            <td>
                                <?php echo $usuario['nome'] ?>
                            </td>
                            <td><?php echo $usuario['numerotelefone'] ?></td>
                            <td>
                                <a href="editar.php" class="btn btn-default">Editar</a> &nbsp;
                                <a href="#" class="btn btn-default">Excluir</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <?php
            }
        } else {
            echo "Erro na consulta: " . $conn->error;
        }
        ?>
    </div>

</body>

</html>