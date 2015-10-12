<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\NameAccessorTrait;

/**
 * Add a property $name, and it's accessors (setName(), getName())
 */
trait NameTrait
{
    use NameAccessorTrait;

    /**
     * @var string
     */
    protected $name;
}
