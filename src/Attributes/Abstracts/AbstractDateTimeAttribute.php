<?php

namespace HieuLe\CloudEvents\Attributes\Abstracts;

use DateTimeInterface;
use HieuLe\CloudEvents\Attributes\AttributeInterface;

abstract class AbstractDateTimeAttribute implements AttributeInterface
{
    private DateTimeInterface $value;

    public function __construct(DateTimeInterface $value)
    {
        $this->value = $value;
    }

    public function getValue(): DateTimeInterface
    {
        return $this->value;
    }
}
