<?php

class food extends Products
{
    public $race;
    public $ingredients;
    public $weight;

    public function __construct($title, $price, $img, $weight, $race, $ingredients)
    {
        parent::__construct($title, $price, $img,);
        $this->race = $race;
        $this->ingredients = $ingredients;
        $this->weight = $weight;
    }
}
