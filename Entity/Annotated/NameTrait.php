<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\NameAccessorTrait;

/**
 * Add a property $name, and it's accessors (setName(), getName())
 * Can't be null, default ''
 */
trait NameTrait
{
    use NameAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    protected $name;
}
