<?php

namespace steevanb\EntityUtils\Traits\Accessor;

/**
 * This trait need a property named $id
 */
trait Id
{
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
