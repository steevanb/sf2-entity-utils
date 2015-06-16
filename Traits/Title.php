<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $title, and it's accessors (setTitle() and getTitle())
 * Can't be null, '' by default
 */
trait Title
{
    use TitleAccessors;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
}