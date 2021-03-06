<?php

namespace steevanb\EntityUtils\Traits;

use steevanb\EntityUtils\Traits\Accessor\EMail as EMailAccessor;

/**
 * Add a property $email, and it's accessors (setEmail(), getEMail())
 */
trait EMail
{
    use EMailAccessor;

    /**
     * @var string
     */
    protected $email;
}
