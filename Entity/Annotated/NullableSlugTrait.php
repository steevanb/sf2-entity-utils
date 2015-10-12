<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\SlugAccessorTrait;

/**
 * Add a property $slug, and it's accessors (setSlug() and getSlug())
 * Can be null
 */
trait NullableSlugTrait
{
    use SlugAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    protected $slug;
}
