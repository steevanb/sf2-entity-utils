<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\SlugAccessorTrait;

/**
 * Add a property $slug, and it's accessor (setSlug(), getSlug())
 * Can't be null, default ''
 */
trait SlugTrait
{
    use SlugAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, options={"default":""})
     */
    protected $slug;
}
