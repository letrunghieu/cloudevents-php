<?php

namespace HieuLe\CloudEvents\Attributes\Abstracts;

use HieuLe\CloudEvents\AttributeInterface;

abstract class AbstractDateTimeAttribute implements AttributeInterface
{
    private \DateTimeInterface $value;

    public function getValue(): \DateTimeInterface
    {
        return $this->value;
    }
}
