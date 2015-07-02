<?php

namespace steevanb\EntityUtils\Traits\Accessor;

/**
 * This trait need a property named $description
 */
trait Description
{
    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
