<?php
include "conexao.php";
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "INSERT INTO USUARIO (NOME, EMAIL, SENHA) VALUES ('$nome', '$email', '$senha')";
try {
    mysqli_query($connect, $sql);
} catch (\Throwable $error) {
    die($error);
}
$response = array("success" => true);
echo json_encode($response);
