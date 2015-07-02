<?php

namespace steevanb\EntityUtils\Traits\Annotated;

use Doctrine\ORM\Mapping as ORM;
use steevanb\EntityUtils\Traits\Accessor\Title as TitleAccessor;

/**
 * Add a property $title, and it's accessors (setTitle() and getTitle())
 * Can't be null, default ''
 */
trait Title
{
    use TitleAccessor;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255, options={"default":""})
     */
    protected $title;
}
