<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Add a property translatable named $message, and it's accessor (setMessage(), getMessage())
 * Can be null
 */
trait TranslatableNullableMessage
{
    use NameAccessors;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="message", type="text", nullable=true)
     */
    private $message;
}
