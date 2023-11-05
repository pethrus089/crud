<?php
session_start();
include 'conexao.php';

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$stmt = $conn -> prepare ('select * from usuarios where nomelogin like  ( ? ) and senha like ?');
$stmt->bind_param('ss',$usuario,$senha);
$stmt->execute();

$resultado = $stmt->get_result();

if($resultado->num_rows>0){
    $_SESSION['loggedin'] = true;
    header("location: index.php");
}else{
    $_SESSION['loggedin'] = false;
    header("location: login.php");
}
?>