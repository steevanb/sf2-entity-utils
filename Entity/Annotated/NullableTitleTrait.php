<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\TitleAccessorTrait;

/**
 * Add a property $title, and it's accessors (setTitle() and getTitle())
 * Can be null
 */
trait NullableTitleTrait
{
    use TitleAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $title;
}
