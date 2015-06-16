<?php

namespace steevanb\EntityUtils\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a property named $slug, and it's accessor (setSlug(), getSlug())
 */
trait Slug
{
    /**
     * @var string
     * @ORM\Column(name="slug", type="string", length=50)
     */
    private $slug;

    /**
     * Set slug
     *
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
