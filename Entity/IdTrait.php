<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\IdAccessorTrait;


/**
 * Add a property $id, and it's accessor (getId())
 *
 * /!\ Do not use if you use LazyLoading
 * @link https://github.com/doctrine/doctrine2/issues/6042
 */
trait IdTrait
{
    use IdAccessorTrait;

    /**
     * @var integer
     */
    protected $id;
}
