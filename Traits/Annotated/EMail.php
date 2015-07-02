<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\EMail as EMailAccessor;

/**
 * Add a property $email, and it's accessors (setEmail(), getEMail())
 * Can't be null, default ''
 */
trait EMail
{
    use EMailAccessor;

    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=255, options={"default":""})
     */
    protected $email;
}
