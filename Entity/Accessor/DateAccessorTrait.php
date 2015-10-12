<?php

namespace steevanb\EntityUtils\Entity\Accessor;

/**
 * This trait need a property named $date
 */
trait DateAccessorTrait
{
    /**
     * @param \DateTime $date
     * @return $this
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
