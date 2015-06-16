<?php

namespace steevanb\EntityUtils\Traits;

/**
 * This trait need a property named $message
 */
trait MessageAccessors
{
    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
