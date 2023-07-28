<?php
require 'conexao.php';

$id = $_POST ['id'];

$query = "DELETE FROM usuarios WHERE id = $id";

$exec = mysqli_query($conexao, $query);

header('Location:lista-usuarios.php');

?>