<?php

namespace steevanb\EntityUtils\Traits;

/**
 * This trait need a property named $email
 */
trait EMailAccessors
{
    /**
     * @param string $email
     * @return $this
     */
    public function setEMail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
        return $this->email;
    }
}
