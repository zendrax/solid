<?php

namespace Acme\Services;

/**
 * Class LocalStorage
 *
 * @package Acme\Services
 */
class LocalStorage
{
    /**
     * @return string
     */
    public function path(): string
    {
        return __DIR__ . '/../Storage/Local';
    }
}
