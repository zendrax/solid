<?php

namespace Acme\Services;

class StormStorage
{
    public static function cloud()
    {
        return new CloudStorage;
    }

    public static function local()
    {
        return new LocalStorage;
    }
}
