<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $date, and it's accessors (setDate(), getDate())
 * Can be null
 */
trait NullableDateTime
{
    use DateAccessors;

    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;
}
