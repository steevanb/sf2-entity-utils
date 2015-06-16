<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $name, and it's accessor (setName(), getName())
 */
trait Name
{
    use NameAccessors;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
}