<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Entity\Accessor\TitleAccessorTrait;

/**
 * Add a translatable property $title, and it's accessors (setTitle() and getTitle())
 * Can't be null, default ''
 */
trait TranslatableTitleTrait
{
    use TitleAccessorTrait;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    protected $title;
}
