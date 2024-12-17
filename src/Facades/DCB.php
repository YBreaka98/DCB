<?php

namespace Ybreaka98\DCB\Facades;

use Illuminate\Support\Facades\Facade;


class DCB extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ybreaka98\DCB\DCB::class;
    }
}
