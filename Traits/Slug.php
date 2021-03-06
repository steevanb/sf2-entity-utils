<?php

namespace steevanb\EntityUtils\Traits;

use steevanb\EntityUtils\Traits\Accessor\Slug as SlugAccessor;

/**
 * Add a property $slug, and it's accessor (setSlug(), getSlug())
 */
trait Slug
{
    use SlugAccessor;

    /**
     * @var string
     */
    protected $slug;
}
