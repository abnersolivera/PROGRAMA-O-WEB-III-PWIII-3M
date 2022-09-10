<?php
// iniciar session;
session_start();
// incluir o servidor
include("../servidor.php");

//Variaveis post

$titulo = $_POST["titulo"];
$descricao = $_POST["desc"];
$valor = $_POST["valor"];
$ed = $_POST["ed"];

$imagem = $_FILES["arq"];

?>