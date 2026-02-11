<?php
class Shape
{
    public $base;
    public $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }
}

// subclases: rectángulo y triángulo
class Rectangle extends Shape
{
    public function area()
    {
        return $this->base * $this->height;
    }
}

class Triangle extends Shape
{
    public function area()
    {
        return ($this->base * $this->height) / 2;
    }
}
// imprensión terminal
$triangle = new Triangle(30, 5);
$rectangle = new Rectangle(30, 5);

echo "Area of ​Triangle: " . $triangle->area() . " cm²" . PHP_EOL;
echo "Area of R​ectangle: " . $rectangle->area() . " cm²" . PHP_EOL;
