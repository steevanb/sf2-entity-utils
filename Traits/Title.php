<?php

namespace steevanb\EntityUtils\Traits;

use steevanb\EntityUtils\Traits\Accessor\Title as TitleAccessor;

/**
 * Add a property $title, and it's accessors (setTitle() and getTitle())
 */
trait Title
{
    use TitleAccessor;

    /**
     * @var string
     */
    protected $title;
}
