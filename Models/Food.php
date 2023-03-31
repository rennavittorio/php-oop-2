<?php

class Food extends Product
{
    protected $weigth;
    protected $expirationDate;

    function __construct($prefix, $_img, $_title, $_price, $_weigth, $_expirationDate)
    {
        Product::__construct($prefix, $_img, $_title, $_price);

        $this->setWeigth($_weigth);
        $this->setExpirationDate($_expirationDate);
    }


    //setters
    public function setWeigth($newValue)
    {
        $this->weigth = $newValue;
    }

    public function setExpirationDate($newValue)
    {
        $this->expirationDate = $newValue;
    }

    //getters
    public function getWeigth()
    {
        return $this->weigth;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}
