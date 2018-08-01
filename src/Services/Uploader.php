<?php

namespace Acme\Services;

/**
 * Class Uploader
 *
 * @package Acme\Services
 */
class Uploader
{
    /** @var Storage $storage */
    protected $storage;

    /**
     * Uploader constructor.
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
    protected function init()
    {
        $this->storage = StormStorage::cloud();
    }
}
