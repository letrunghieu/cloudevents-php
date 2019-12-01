<?php

namespace HieuLe\CloudEvents\Attributes\Abstracts;

use HieuLe\CloudEvents\AttributeInterface;

abstract class AbstractStringAttribute implements AttributeInterface
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
