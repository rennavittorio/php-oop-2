<?php

trait Discount
{
    protected $isAvialable;
    protected $percDiscount;
    protected $discountedPrice;
    // protected $startingPrice;

    public function setIsAvialable($_isAvailable)
    {
        $this->isAvialable = $_isAvailable;
    }

    public function setPercDiscount($_percDiscount)
    {
        $this->percDiscount = $_percDiscount;
    }

    // public function setStartingPrice($_startingPrice)
    // {
    //     $this->startingPrice = $_startingPrice;
    // }

    public function setDiscountedPrice($_price, $_percDiscount, $_isAvailable)
    {
        if ($_isAvailable === true) {
            if ($_percDiscount === null) {
                throw new Exception('discount perc not found');
            } else {
                $totalDiscount = ($_price * $_percDiscount) / 100;
                $this->discountedPrice = $_price - $totalDiscount;
            }
        }
    }


    public function getDiscountedPrice()
    {
        return $this->discountedPrice;
    }
}
