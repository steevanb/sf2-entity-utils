<?php

namespace steevanb\EntityUtils\Entity\Accessor;

/**
 * This trait need a property named $title
 */
trait TitleAccessorTrait
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
