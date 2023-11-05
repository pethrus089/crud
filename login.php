<?php
include 'conexao.php';

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
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
    <title>Login</title>
</head>

<body>

<div class="container" id="login-dialog">
		<form class="col-lg-4 col-lg-offset-4" style="border: 1px solid #aaa; text-align: center;" action="verificacao.php" method="post">
			<div class="form-group">
			&nbsp;
			</div>
			<div class="form-group">
				<label for="usuario">Usuário</label> &nbsp;
				<input type="text" name="usuario" placeholder="usuario"/>
			</div>	
			<div class="form-group">
				<label for="senha">Senha</label> &nbsp;
				<input type="password"name="senha" placeholder="senha"/>
			</div>
			<div class="form-group">
				<input type="submit" value="Login" class="btn btn-primary" />
			</div>
		</form>
	</div>

</body>

</html>