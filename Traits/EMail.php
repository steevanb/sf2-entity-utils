<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $email, and it's accessors (setEmail(), getEMail())
 * Can't be null
 */
trait EMail
{
    use EMailAccessors;

    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
}