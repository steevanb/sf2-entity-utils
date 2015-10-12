<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Entity\Accessor\TitleAccessorTrait;

/**
 * Add a translatable property $description, and it's accessors (setDescription() and getDescription())
 * Can be null
 */
trait TranslatableNullableTitleTrait
{
    use TitleAccessorTrait;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $title;
}
