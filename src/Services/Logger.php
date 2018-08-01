<?php

namespace Acme\Services;

/**
 * Class Logger
 *
 * @package Acme\Services
 */
class Logger
{
    /** @var Storage $storage */
    protected $storage;

    /**
     * Logger constructor.
     */
    public function __construct()
    {
        $this->init();
    }

    /**
     * @return string
     */
    public function info(): string
    {
        return $this->storage->path();
    }

    /**
     * @return void
     */
    protected function init(): void
    {
        $this->storage = new CloudStorage;
    }
}
