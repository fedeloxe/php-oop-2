<?php

class accesories extends Products
{
    public $race;
    public $material;
    public $dimension;

    public function __construct($title, $price, $img, $race, $material, $dimension)
    {
        parent::__construct($title, $price, $img,);
        $this->race = $race;
        $this->material = $material;
        $this->dimension = $dimension;
    }
}
