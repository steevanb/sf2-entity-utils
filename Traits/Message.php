<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $message, and it's accessors (setMessage(), getMessage())
 * Can't be null
 */
trait Message
{
    use MessageAccessors;

    /**
     * @var string
     * @ORM\Column(name="message", type="text")
     */
    private $message;
}
