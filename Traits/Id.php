<?php

namespace steevanb\EntityUtils\Traits;

use steevanb\EntityUtils\Traits\Accessor\Id as IdAccessors;

/**
 * Add a property $id, and it's accessor (getId())
 */
trait Id
{
    use IdAccessors;

    /**
     * @var integer
     */
    protected $id;
}
