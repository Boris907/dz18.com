<?php

namespace MyProject\Food;


use MyProject\Product;

class Cookie extends Product
{
    const NAME = 'Cookie';

    function __toString()
    {
        $res.= $this::NAME.": ".parent::__toString();
        return $res;
    }
}