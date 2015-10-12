<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\DateAccessorTrait;

/**
 * Add a property $date, and it's accessors (setDate(), getDate())
 * Can't be null
 */
trait DateTrait
{
    use DateAccessorTrait;

    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    protected $date;
}
