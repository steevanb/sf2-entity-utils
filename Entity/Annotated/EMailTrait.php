<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\EMailAccessorTrait;

/**
 * Add a property $email, and it's accessors (setEmail(), getEMail())
 * Can't be null, default ''
 */
trait EMailTrait
{
    use EMailAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    protected $email;
}
