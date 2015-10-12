<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\MessageAccessorTrait;

/**
 * Add a property $message, and it's accessors (setMessage(), getMessage())
 * Can be null
 */
trait NullableMessageTrait
{
    use MessageAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    protected $message;
}
