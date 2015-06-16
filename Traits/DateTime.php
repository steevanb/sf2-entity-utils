<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $date, and it's accessors (setDate(), getDate())
 * Can't be null
 */
trait DateTime
{
    use DateAccessors;

    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
}
