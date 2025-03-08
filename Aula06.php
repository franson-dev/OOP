<?php 

// Incluindo o arquivo "Aula05.php", que contém a definição da classe Circle
include("Aula05.php");

// Criando um novo objeto da classe Circle com raio igual a 8
$circle01 = new Circle(8);

// Exibindo a área do círculo chamando o método getArea() do objeto $circle01
// O texto "Area:" será exibido seguido pelo valor calculado da área
echo ("Area: {$circle01->getArea()}");
