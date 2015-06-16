<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Add a translatable property named $description, and it's accessors (setDescription() and getDescription())
 * Can be null
 */
trait TranslatableNullableTitle
{
    use TitleAccessors;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;
}