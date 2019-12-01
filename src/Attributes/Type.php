<?php

namespace HieuLe\CloudEvents\Attributes;

use HieuLe\CloudEvents\Attributes\Abstracts\AbstractStringAttribute;

class Type extends AbstractStringAttribute
{
    public const ATTR_NAME = 'type';

    public function getName(): string
    {
        return self::ATTR_NAME;
    }
}
