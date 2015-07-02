<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Name as NameAccessor;

/**
 * Add a property $email, and it's accessors (setEMail() and getEMail())
 * Can be null
 */
trait NullableEMail
{
    use NameAccessor;

    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    protected $email;
}
