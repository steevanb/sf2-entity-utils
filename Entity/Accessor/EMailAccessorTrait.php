<?php

namespace steevanb\EntityUtils\Entity\Accessor;

/**
 * This trait need a property named $email
 */
trait EMailAccessorTrait
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
