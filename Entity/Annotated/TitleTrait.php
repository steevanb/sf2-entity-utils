<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\TitleAccessorTrait;

/**
 * Add a property $title, and it's accessors (setTitle() and getTitle())
 * Can't be null, default ''
 */
trait TitleTrait
{
    use TitleAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    protected $title;
}
