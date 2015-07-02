<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Date as DateAccessor;

/**
 * Add a property $date, and it's accessors (setDate(), getDate())
 * Can't be null
 */
trait Date
{
    use DateAccessor;

    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="date")
     */
    protected $date;
}
