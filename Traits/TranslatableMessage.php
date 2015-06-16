<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Add a property translatable named $name, and it's accessor (setName(), getName())
 * Can't be null
 */
trait TranslatableMessage
{
    use MessageAccessors;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="message", type="text")
     */
    private $name;
}