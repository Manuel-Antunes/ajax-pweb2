<?php
include "conexao.php";

$id = $_POST['id'];
$sql = "DELETE FROM USUARIO WHERE ID_USUARIO = $id";
try {
    mysqli_query($connect, $sql);
} catch (\Throwable $error) {
    die($error);
}
$response = array("success" => true, "id" => $id);
echo json_encode($sql);
