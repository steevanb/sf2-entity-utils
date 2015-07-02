<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Slug as SlugAccessor;

/**
 * Add a property $slug, and it's accessors (setSlug() and getSlug())
 * Can be null
 */
trait NullableSlug
{
    use SlugAccessor;

    /**
     * @var string
     * @ORM\Column(name="slug", type="string", length=50, nullable=true)
     */
    protected $slug;
}
