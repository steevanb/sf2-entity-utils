<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Description as DescriptionAccessor;

/**
 * Add a property $description, and it's accessors (setDescription() and getDescription())
 * Can be null
 */
trait NullableDescription
{
    use DescriptionAccessor;

    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;
}
