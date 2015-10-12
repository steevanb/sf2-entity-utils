<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\UrlAccessorTrait;

/**
 * Add a property $url, and it's accessors (setUrl(), getUrl())
 * Can't be null, default ''
 */
trait UrlTrait
{
    use UrlAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    protected $url;
}
