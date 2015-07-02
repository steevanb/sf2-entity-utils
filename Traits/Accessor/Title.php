<?php

namespace steevanb\EntityUtils\Traits\Accessor;

/**
 * This trait need a property named $title
 */
trait Title
{
    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
