<?php

namespace steevanb\EntityUtils\Entity\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Entity\Accessor\NameAccessorTrait;

/**
 * Add a property $email, and it's accessors (setEMail() and getEMail())
 * Can be null
 */
trait NullableEMailTrait
{
    use NameAccessorTrait;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $email;
}
