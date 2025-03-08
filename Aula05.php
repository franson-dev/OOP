<?php
class Circle {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
       return round(pi(), 2) * pow($this->radius, 2);
       //return round(pi(), 2);
    }

    public function getCircumference() {
        return 2 * pi() * $this->radius;
    }
}
