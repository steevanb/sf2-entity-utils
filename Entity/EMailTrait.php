<?php

namespace steevanb\EntityUtils\Entity;

use steevanb\EntityUtils\Entity\Accessor\EMailAccessorTrait;

/**
 * Add a property $email, and it's accessors (setEmail(), getEMail())
 */
trait EMailTrait
{
    use EMailAccessorTrait;

    /**
     * @var string
     */
    protected $email;
}
