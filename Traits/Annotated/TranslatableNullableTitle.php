<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Traits\Accessor\Title as TitleAccessor;

/**
 * Add a translatable property $description, and it's accessors (setDescription() and getDescription())
 * Can be null
 */
trait TranslatableNullableTitle
{
    use TitleAccessor;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    protected $title;
}
