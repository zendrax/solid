<?php

namespace Acme\Services;

/**
 * Class Storage
 *
 * @package Acme\Services
 */
interface Storage
{
    /**
     * @return string
     */
    public function path(): string;
}
