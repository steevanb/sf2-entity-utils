<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $name, and it's accessors (setName() and getName())
 * Can be null
 */
trait NullableName
{
    use NameAccessors;

    /**
     * @var string
     * @ORM\Column(name="name", type="text", nullable=true)
     */
    private $name;
}
