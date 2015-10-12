<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\NameAccessorTrait;

/**
 * Add a property $name, and it's accessors (setName() and getName())
 * Can be null
 */
trait NullableNameTrait
{
    use NameAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    protected $name;
}
