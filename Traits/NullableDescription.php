<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $description, and it's accessors (setDescription() and getDescription())
 * Can be null
 */
trait NullableDescription
{
    use DescriptionAccessors;

    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;
}