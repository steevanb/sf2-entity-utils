<?php

namespace steevanb\EntityUtils\Traits\Accessor;

/**
 * This trait need a property named $message
 */
trait Message
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
