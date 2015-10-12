<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\MessageAccessorTrait;

/**
 * Add a property $message, and it's accessors (setMessage(), getMessage())
 */
trait MessageTrait
{
    use MessageAccessorTrait;

    /**
     * @var string
     */
    protected $message;
}
