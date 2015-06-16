<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $email, and it's accessors (setEMail() and getEMail())
 * Can be null
 */
trait NullableEMail
{
    use NameAccessors;

    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;
}
