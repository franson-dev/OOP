<?php

// Define a classe "Shape" que será usada como base ou modelo para outras classes
class Shape {

    // Declara duas propriedades protegidas: "base" e "altura"
    // Essas propriedades só podem ser acessadas diretamente pela própria classe ou por classes filhas
    protected $base;
    protected $altura;

    // Método mágico __set é usado para definir valores das propriedades da classe
    // Ele é chamado automaticamente quando se tenta atribuir um valor a uma propriedade inacessível ou protegida
    function __set($name, $value){
        // Atribui o valor à propriedade correspondente
        $this -> $name = $value;
    }
};
