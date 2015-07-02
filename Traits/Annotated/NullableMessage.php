<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Message as MessageAccessor;

/**
 * Add a property $message, and it's accessors (setMessage(), getMessage())
 * Can be null
 */
trait NullableMessage
{
    use MessageAccessor;

    /**
     * @var string
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    protected $message;
}
