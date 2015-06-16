<?php

namespace steevanb\EntityUtils\Traits;

/**
 * This trait need a property named $description
 */
trait DescriptionAccessors
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
