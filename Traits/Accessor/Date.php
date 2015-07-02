<?php

namespace steevanb\EntityUtils\Traits\Accessor;

/**
 * This trait need a property named $date
 */
trait Date
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
