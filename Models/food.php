<?php

class food extends Products
{
    public $race;
    public $ingredients;

    public function __construct($title, $price, $img, $weight, $race, $ingredients)
    {
        parent::__construct($title, $price, $img, $weight);
        $this->race = $race;
        $this->ingredients = $ingredients;
    }
}
