<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Entity\Accessor\MessageAccessorTrait;

/**
 * Add a translatable property $message, and it's accessor (setMessage(), getMessage())
 * Can't be null, default ''
 */
trait TranslatableMessageTrait
{
    use MessageAccessorTrait;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(type="text", options={"default":""})
     */
    protected $message;
}
