<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use steevanb\EntityUtils\Traits\Accessor\Name as NameAccessor;

/**
 * Add a translatable property $name, and it's accessor (setName(), getName())
 * Can't be null
 */
trait TranslatableName
{
    use NameAccessor;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="name", type="string", length=255, options={"default":""})
     */
    protected $name;
}
