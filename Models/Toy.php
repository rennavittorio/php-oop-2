<?php

class Toy extends Product
{
    protected $isForPuppies;
    protected $isPlasticFree;

    function __construct($prefix, $_img, $_title, $_price, $_isForPuppies, $_isPlasticFree)
    {
        Product::__construct($prefix, $_img, $_title, $_price);

        $this->setIsForPuppies($_isForPuppies);
        $this->setIsPlasticFree($_isPlasticFree);
    }


    //setters
    public function setIsForPuppies($newValue)
    {
        $this->isForPuppies = $newValue;
    }

    public function setIsPlasticFree($newValue)
    {
        $this->isPlasticFree = $newValue;
    }

    //getters
    public function getIsForPuppies()
    {
        return $this->isForPuppies;
    }

    public function getIsPlasticFree()
    {
        return $this->isPlasticFree;
    }
}
