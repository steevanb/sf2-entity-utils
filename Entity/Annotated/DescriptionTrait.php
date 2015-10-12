<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\DescriptionAccessorTrait;

/**
 * Add a property $description, and it's accessors (setDescription() and getDescription())
 * Can't be null, default ''
 */
trait DescriptionTrait
{
    use DescriptionAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="text", options={"default":""})
     */
    protected $description;
}
