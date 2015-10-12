<?php

namespace steevanb\EntityUtils\Entity\Accessor;

/**
 * This trait need a property named $enabled
 */
trait EnabledAccessorTrait
{
    /**
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = boolvar($enabled);

        return $this;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }
}
