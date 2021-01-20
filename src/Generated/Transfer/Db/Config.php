<?php

namespace Generated\Transfer\Db;

class Config
{
    /**
     * @var bool|null $isDevMode
     */
    protected $isDevMode;

    /**
     * @var bool|null $proxyDir
     */
    protected $proxyDir;

    /**
     * @var bool|null $cache
     */
    protected $cache;

    /**
     * @var bool|null $useSimpleAnnotationReader
     */
    protected $useSimpleAnnotationReader;


    /**
     * @return bool|null
     */
    public function getIsDevMode(): ?bool
    {
        return $this->isDevMode;
    }

    /**
     * @param bool|null $isDevMode
     *
     * @return \Generated\Transfer\Db\Config
     */
    public function setIsDevMode(?bool $isDevMode): Config
    {
        $this->isDevMode = $isDevMode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProxyDir(): ?string
    {
        return $this->proxyDir;
    }

    /**
     * @param string|null $proxyDir
     *
     * @return \Generated\Transfer\Db\Config
     */
    public function setProxyDir(?string $proxyDir): Config
    {
        $this->proxyDir = $proxyDir;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCache(): ?string
    {
        return $this->cache;
    }

    /**
     * @param string|null $cache
     *
     * @return \Generated\Transfer\Db\Config
     */
    public function setCache(?string $cache): Config
    {
        $this->cache = $cache;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getUseSimpleAnnotationReader(): ?bool
    {
        return $this->useSimpleAnnotationReader;
    }

    /**
     * @param bool|null $useSimpleAnnotationReader
     *
     * @return \Generated\Transfer\Db\Config
     */
    public function setUseSimpleAnnotationReader(?bool $useSimpleAnnotationReader): Config
    {
        $this->useSimpleAnnotationReader = $useSimpleAnnotationReader;

        return $this;
    }
}
