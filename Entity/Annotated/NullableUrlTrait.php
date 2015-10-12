<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\UrlAccessorTrait;

/**
 * Add a property $url, and it's accessors (setUrl() and getUrl())
 * Can be null
 */
trait NullableUrlTrait
{
    use UrlAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    protected $url;
}
