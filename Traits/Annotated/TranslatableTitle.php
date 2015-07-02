<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Traits\Accessor\Title as TitleAccessor;

/**
 * Add a translatable property $title, and it's accessors (setTitle() and getTitle())
 * Can't be null, default ''
 */
trait TranslatableTitle
{
    use TitleAccessor;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="title", type="string", length=255, options={"default":""})
     */
    protected $title;
}
