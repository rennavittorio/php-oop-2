<?php

class Doghouse extends Product
{
    protected $prodLength;
    protected $prodHeight;

    function __construct($prefix, $_img, $_title, $_price, $_prodLength, $_prodHeight)
    {
        Product::__construct($prefix, $_img, $_title, $_price);

        $this->setProdLength($_prodLength);
        $this->setProdHeight($_prodHeight);
    }


    //setters
    public function setProdLength($newValue)
    {
        $this->prodLength = $newValue;
    }

    public function setProdHeight($newValue)
    {
        $this->prodHeight = $newValue;
    }

    //getters
    public function getProdLength()
    {
        return $this->prodLength;
    }

    public function getProdHeight()
    {
        return $this->prodHeight;
    }
}
