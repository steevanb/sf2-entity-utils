<?php

namespace steevanb\EntityUtils\Traits;

use steevanb\EntityUtils\Traits\Accessor\Name as NameAccessor;

/**
 * Add a property $name, and it's accessors (setName(), getName())
 */
trait Name
{
    use NameAccessor;

    /**
     * @var string
     */
    private $name;
}
