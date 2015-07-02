<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Name as NameAccessor;

/**
 * Add a property $name, and it's accessors (setName(), getName())
 * Can't be null, default ''
 */
trait Name
{
    use NameAccessor;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=255, options={"default":""})
     */
    private $name;
}
