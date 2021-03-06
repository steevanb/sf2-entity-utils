<?php

namespace steevanb\EntityUtils\Traits;

use steevanb\EntityUtils\Traits\Accessor\Description as DescriptionAccessor;

/**
 * Add a property $description, and it's accessors (setDescription() and getDescription())
 */
trait Description
{
    use DescriptionAccessor;

    /**
     * @var string
     */
    protected $description;
}
