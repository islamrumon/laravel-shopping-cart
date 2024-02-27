<?php

namespace Islamrumon\Shoppingcart\Contracts;

use Islamrumon\Shoppingcart\CartItem;

interface Calculator
{
    public static function getAttribute(string $attribute, CartItem $cartItem);
}
