<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\TitleAccessorTrait;

/**
 * Add a property $title, and it's accessors (setTitle() and getTitle())
 */
trait TitleTrait
{
    use TitleAccessorTrait;

    /**
     * @var string
     */
    protected $title;
}
