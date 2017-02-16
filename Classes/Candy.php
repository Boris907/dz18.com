<?php
/**
 * Created by PhpStorm.
 * User: bori
 * Date: 25.01.2017
 * Time: 16:02
 */

namespace MyProject\Food;


use MyProject\Product;

class Candy extends Product
{
    const NAME = 'Candy';

    function __toString()
    {
        $res.= $this::NAME.": ".parent::__toString();
        return $res;
    }
}