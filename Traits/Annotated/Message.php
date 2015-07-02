<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Message as MessageAccessor;

/**
 * Add a property $message, and it's accessors (setMessage(), getMessage())
 * Can't be null, default ''
 */
trait Message
{
    use MessageAccessor;

    /**
     * @var string
     * @ORM\Column(name="message", type="text", options={"default":""})
     */
    protected $message;
}
