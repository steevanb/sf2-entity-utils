<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Add a property translatable named $name, and it's accessor (setName(), getName())
 * Can be null
 */
trait TranslatableNullableName
{
    use NameAccessors;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;
}