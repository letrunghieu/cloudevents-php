<?php

namespace HieuLe\CloudEvents\Attributes;

use HieuLe\CloudEvents\Attributes\Abstracts\AbstractStringAttribute;

class Subject extends AbstractStringAttribute
{
    public const ATTR_NAME = 'subject';

    public function getName(): string
    {
        return self::ATTR_NAME;
    }
}
