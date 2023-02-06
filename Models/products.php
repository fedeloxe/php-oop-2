<?php
class Products
{
    public $title;
    public $price;
    public $img;


    public function __construct($title, $price, $img,)
    {
        $this->title = $title;
        $this->price = $price;
        $this->img = $img;
    }
}
