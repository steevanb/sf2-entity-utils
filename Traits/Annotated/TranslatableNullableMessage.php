<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Traits\Accessor\Message as MessageAccessor;

/**
 * Add a translatable property $message, and it's accessor (setMessage(), getMessage())
 * Can be null
 */
trait TranslatableNullableMessage
{
    use MessageAccessor;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    protected $message;
}
