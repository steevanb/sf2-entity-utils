<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Entity\Accessor\MessageAccessorTrait;

/**
 * Add a translatable property $message, and it's accessor (setMessage(), getMessage())
 * Can be null
 */
trait TranslatableNullableMessageTrait
{
    use MessageAccessorTrait;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(type="text", nullable=true)
     */
    protected $message;
}
