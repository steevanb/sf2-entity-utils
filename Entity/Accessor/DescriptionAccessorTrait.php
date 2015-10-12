<?php

namespace steevanb\EntityUtils\Entity\Accessor;

/**
 * This trait need a property named $description
 */
trait DescriptionAccessorTrait
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
