<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $title, and it's accessors (setTitle() and getTitle())
 * Can be null
 */
trait NullableTitle
{
    use TitleAccessors;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;
}