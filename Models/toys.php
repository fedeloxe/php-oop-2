<?php

class toys extends Products
{
    public $race;
    public $features;
    public $dimension;

    public function __construct($title, $price, $img, $race, $features, $dimension)
    {
        parent::__construct($title, $price, $img,);
        $this->race = $race;
        $this->features = $features;
        $this->dimension = $dimension;
    }
}
