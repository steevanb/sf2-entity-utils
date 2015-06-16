<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Add a translatable property named $description, and it's accessors (setDescription() and getDescription())
 * Can't be null
 */
trait TranslatableDescription
{
    use DescriptionAccessors;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="description", type="text")
     */
    private $description;
}