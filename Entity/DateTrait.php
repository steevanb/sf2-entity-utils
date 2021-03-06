<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\DateAccessorTrait;

/**
 * Add a property $date, and it's accessors (setDate(), getDate())
 */
trait DateTrait
{
    use DateAccessorTrait;

    /**
     * @var \DateTime
     */
    protected $date;
}
