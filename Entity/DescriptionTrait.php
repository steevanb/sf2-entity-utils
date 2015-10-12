<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\DescriptionAccessorTrait;

/**
 * Add a property $description, and it's accessors (setDescription() and getDescription())
 */
trait DescriptionTrait
{
    use DescriptionAccessorTrait;

    /**
     * @var string
     */
    protected $description;
}
