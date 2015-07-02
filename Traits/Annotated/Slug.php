<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Slug as SlugAccessor;

/**
 * Add a property $slug, and it's accessor (setSlug(), getSlug())
 * Can't be null, default ''
 */
trait Slug
{
    use SlugAccessor;

    /**
     * @var string
     * @ORM\Column(name="slug", type="string", length=50, options={"default":""})
     */
    protected $slug;
}
