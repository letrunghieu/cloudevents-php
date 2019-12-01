<?php

namespace HieuLe\CloudEvents\Attributes;

use HieuLe\CloudEvents\Attributes\Abstracts\AbstractStringAttribute;

class Data extends AbstractStringAttribute
{
    public const ATTR_NAME = 'data';

    public function getName(): string
    {
        return self::ATTR_NAME;
    }
}
