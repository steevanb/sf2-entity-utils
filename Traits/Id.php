<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $id, and it's accessor (getId())
 */
trait Id
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned": true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
