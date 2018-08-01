<?php

namespace Acme\Services;

/**
 * Class CloudStorage
 *
 * @package Acme\Services
 */
class CloudStorage implements Storage
{
    /**
     * @return string
     */
    public function path(): string
    {
        return __DIR__ . '/../Storage/Cloud';
    }
}
