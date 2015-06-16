<?php

namespace steevanb\EntityUtils\Traits;

/**
 * This trait need a property named $title
 */
trait TitleAccessors
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
