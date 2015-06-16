<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $description, and it's accessors (setDescription() and getDescription())
 * Can't be null, '' by default
 */
trait Description
{
    use DescriptionAccessors;

    /**
     * @var string
     * @ORM\Column(name="description", type="text")
     */
    private $description;
}
