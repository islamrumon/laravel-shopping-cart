<?php

namespace Islamrumon\Tests\Shoppingcart\Fixtures;

class ProductModel
{
    public $someValue = 'Some value';

    public function find($id)
    {
        return $this;
    }
}
