<?php
// Definição da classe Circle (Círculo)
class Circle {
    // Propriedade protegida para armazenar o raio do círculo
    protected $radius;

    // Método construtor para inicializar o raio do círculo
    public function __construct($radius) {
        $this->radius = $radius; // Atribui o valor passado ao atributo radius
    }

    // Método para calcular a área do círculo
    public function getArea() {
        // Utiliza a fórmula da área (πr²) e arredonda π para 2 casas decimais
        return round(pi(), 2) * pow($this->radius, 2);
        // Nota: o comentário abaixo está comentado no código original
        // return round(pi(), 2);
    }

    // Método para calcular a circunferência do círculo
    public function getCircumference() {
        // Utiliza a fórmula da circunferência (2πr)
        return 2 * pi() * $this->radius;
    }
}
