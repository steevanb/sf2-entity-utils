<?php

namespace steevanb\EntityUtils\Traits;

/**
 * This trait need a property named $description
 */
trait DateAccessors
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
