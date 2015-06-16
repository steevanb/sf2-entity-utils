<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $date, and it's accessors (setDate(), getDate())
 * Can't be null
 */
trait Date
{
    use DateAccessors;

    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="date")
     */
    private $date;
}
