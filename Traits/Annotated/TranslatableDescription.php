<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Traits\Accessor\Description as DescriptionAccessor;

/**
 * Add a translatable property $description, and it's accessors (setDescription() and getDescription())
 * Can't be null, default ''
 */
trait TranslatableDescription
{
    use DescriptionAccessor;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="description", type="text", options={"default":""})
     */
    protected $description;
}
