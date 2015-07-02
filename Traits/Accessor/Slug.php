<?php

namespace steevanb\EntityUtils\Traits\Accessor;

/**
 * This trait need a property named $slug
 */
trait Slug
{
    /**
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
