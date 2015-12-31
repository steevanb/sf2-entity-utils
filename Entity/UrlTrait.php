<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\UrlAccessorTrait;

/**
 * Add a property $url, and it's accessors (setUrl(), getUrl())
 */
trait UrlTrait
{
    use UrlAccessorTrait;

    /**
     * @var string
     */
    protected $url;
}
