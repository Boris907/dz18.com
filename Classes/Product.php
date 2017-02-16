<?php


namespace MyProject;


class Product
{
    protected $name;
    protected $price;

    function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function __toString()
    {
        $res = '';
        $res.= $this->name.' - '. $this->price;
        return $res;
    }



}