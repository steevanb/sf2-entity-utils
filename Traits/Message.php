<?php

namespace steevanb\EntityUtils\Traits;

use steevanb\EntityUtils\Traits\Accessor\Message as MessageAccessor;

/**
 * Add a property $message, and it's accessors (setMessage(), getMessage())
 */
trait Message
{
    use MessageAccessor;

    /**
     * @var string
     */
    protected $message;
}
