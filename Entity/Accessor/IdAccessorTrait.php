<?php

namespace steevanb\EntityUtils\Entity\Accessor;

/**
 * This trait need a property named $id
 */
trait IdAccessorTrait
{
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
