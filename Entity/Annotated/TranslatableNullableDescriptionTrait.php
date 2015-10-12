<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Entity\Accessor\DescriptionAccessorTrait;

/**
 * Add a translatable property $description, and it's accessors (setDescription() and getDescription())
 * Can be null
 */
trait TranslatableNullableDescriptionTrait
{
    use DescriptionAccessorTrait;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(type="text", nullable=true)
     */
    protected $description;
}
