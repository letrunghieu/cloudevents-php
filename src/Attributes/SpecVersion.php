<?php

namespace HieuLe\CloudEvents\Attributes;

use HieuLe\CloudEvents\Attributes\Abstracts\AbstractStringAttribute;

class SpecVersion extends AbstractStringAttribute
{
    public const ATTR_NAME = 'specversion';
    public const V1_0 = '1.0';

    public static function v1(): self
    {
        return new self(self::V1_0);
    }

    public function getName(): string
    {
        return self::ATTR_NAME;
    }
}
