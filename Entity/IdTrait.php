<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\IdAccessorTrait;


/**
 * Add a property $id, and it's accessor (getId())
 */
trait IdTrait
{
    use IdAccessorTrait;

    /**
     * @var integer
     */
    protected $id;
}
