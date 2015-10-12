<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\EnabledAccessorTrait;

/**
 * Add a property $enabled, and it's accessors (setEnabled(), isEnabled())
 * Can't be null, default true
 */
trait EnabledTrait
{
    use EnabledAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="boolean", options={"default":true})
     */
    protected $enabled;
}
