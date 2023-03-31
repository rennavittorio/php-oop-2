<?php

class Product
{
    private $id;
    protected $img;
    protected $title;
    protected $price;


    //constructor
    function __construct($prefix, $_img, $_title, $_price)
    {
        $this->setId($prefix);
        $this->setImg($_img);
        $this->setTitle($_title);
        $this->setPrice($_price);
    }


    //setters
    private function setId($prefix)
    {
        $this->id = uniqid($prefix . "_");
        //genera un random id, composto da un prefisso_codicealfanumerico
    }

    public function setImg($newValue)
    {
        $this->img = $newValue;
    }

    public function setTitle($newValue)
    {
        $this->title = $newValue;
    }

    public function setPrice($newValue)
    {
        $this->price = $newValue;
    }

    //getters
    public function getId()
    {
        return $this->id;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
