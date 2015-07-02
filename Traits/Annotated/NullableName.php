<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Name as NameAccessor;

/**
 * Add a property $name, and it's accessors (setName() and getName())
 * Can be null
 */
trait NullableName
{
    use NameAccessor;

    /**
     * @var string
     * @ORM\Column(name="name", type="text", nullable=true)
     */
    protected $name;
}
