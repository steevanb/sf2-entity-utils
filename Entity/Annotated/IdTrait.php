<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\IdAccessorTrait;

/**
 * Add a property $id, and it's accessor (getId())
 */
trait IdTrait
{
    use IdAccessorTrait;

    /**
     * @var integer
     * @ORM\Column(type="integer", options={"unsigned": true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
