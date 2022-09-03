<?php

include("Informatica.php");
include("Apostila.php");

$PHP = new Livros\Informatica("PHP o mundo fantastico!!");


$PHP->Quantidade = 12;
$PHP->Valor = 10.00;

echo "<p>Titulo {$PHP->Titulo} </p>";
echo "<p>Quantidade {$PHP->Quantidade} </p>";
echo "<p>Valor R$ " . number_format($PHP->Valor, 2, ",", ".") . "</p>";

$PHP02 = new Apostila\Informatica();