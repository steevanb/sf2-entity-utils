<?php

namespace steevanb\EntityUtils\Traits;

use steevanb\EntityUtils\Traits\Accessor\Date as DateAccessor;

/**
 * Add a property $date, and it's accessors (setDate(), getDate())
 */
trait DateTime
{
    use DateAccessor;

    /**
     * @var \DateTime
     */
    protected $date;
}
