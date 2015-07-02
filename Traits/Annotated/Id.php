<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Id as IdAccessors;

/**
 * Add a property $id, and it's accessor (getId())
 */
trait Id
{
    use IdAccessors;

    /**
     * @var integer
     * @ORM\Column(name="id", type="integer", options={"unsigned": true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
