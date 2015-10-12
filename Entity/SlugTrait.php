<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\SlugAccessorTrait;

/**
 * Add a property $slug, and it's accessor (setSlug(), getSlug())
 */
trait SlugTrait
{
    use SlugAccessorTrait;

    /**
     * @var string
     */
    protected $slug;
}
