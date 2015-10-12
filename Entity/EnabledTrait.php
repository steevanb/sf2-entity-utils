<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\EnabledAccessorTrait;

/**
 * Add a property $enabled, and it's accessors (setEnabled(), isEnabled())
 */
trait EnabledTrait
{
    use EnabledAccessorTrait;

    /**
     * @var bool
     */
    protected $enabled = true;
}
