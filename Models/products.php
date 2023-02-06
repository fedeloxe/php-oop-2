<?php
class Products
{
    public $title;
    public $price;
    public $img;
    public $weight;

    public function __construct($title, $price, $img, $weight)
    {
        $this->title = $title;
        $this->price = $price;
        $this->img = $img;
        $this->weight = $weight;
    }
}
