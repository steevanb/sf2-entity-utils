<?php

namespace steevanb\EntityUtils\Entity\Accessor;

/**
 * This trait need a property named $url
 */
trait UrlAccessorTrait
{
    /**
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
