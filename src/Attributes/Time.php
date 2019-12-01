<?php

namespace HieuLe\CloudEvents\Attributes;

use HieuLe\CloudEvents\Attributes\Abstracts\AbstractDateTimeAttribute;

class Time extends AbstractDateTimeAttribute
{
    public const ATTR_NAME = 'time';

    public function getName(): string
    {
        return self::ATTR_NAME;
    }
}
