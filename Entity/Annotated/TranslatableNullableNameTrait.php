<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Entity\Accessor\NameAccessorTrait;

/**
 * Add a translatable property $name, and it's accessor (setName(), getName())
 * Can be null
 */
trait TranslatableNullableNameTrait
{
    use NameAccessorTrait;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $name;
}
