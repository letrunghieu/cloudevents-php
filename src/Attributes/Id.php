<?php

namespace HieuLe\CloudEvents\Attributes;

use HieuLe\CloudEvents\Attributes\Abstracts\AbstractStringAttribute;

class Id extends AbstractStringAttribute
{
    public const ATTR_NAME = 'id';

    public function getName(): string
    {
        return self::ATTR_NAME;
    }
}
