<?php
class Rectangle
{
    // public $width = 20;
    // public $height = 10;
    public $width;
    public $height;

    public function __construct()
    {
        $this->width = 12;
        $this->height = 30;
    }

    public function getPerimeter()
    {
        return 2 * ($this->width + $this->height);
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

$a = new Rectangle;
// $a->width = 5;
// $a->height = 20;

echo $a->getPerimeter();
echo $a->getArea();
