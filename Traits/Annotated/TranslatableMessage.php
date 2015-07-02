<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Traits\Accessor\Message as MessageAccessor;

/**
 * Add a translatable property $message, and it's accessor (setMessage(), getMessage())
 * Can't be null, default ''
 */
trait TranslatableMessage
{
    use MessageAccessor;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="message", type="text", options={"default":""})
     */
    protected $message;
}
