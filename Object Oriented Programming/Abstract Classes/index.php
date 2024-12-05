<?php

// Abstract classes cannot be instantiated like other classes

abstract class Shape
{
    protected $name;

    // Abstract method - This method can only be housed in an abstract class
    abstract public function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Concrete method
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape
{ // If you extend a class that has an abstract method, you have to implement that method
    private $radius;

    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        parent::__construct($name);
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}


class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($name, $width, $height)
    {
        $this->width = $width;
        $this->height = $height;
        parent::__construct($name);
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle('Circle', 5);
$rectangle = new Rectangle('Rectangle', 6, 7);

echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br>';
echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea() . '<br>';
