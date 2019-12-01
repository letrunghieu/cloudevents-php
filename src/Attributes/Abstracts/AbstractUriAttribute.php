<?php

namespace HieuLe\CloudEvents\Attributes\Abstracts;

use HieuLe\CloudEvents\AttributeInterface;
use HieuLe\CloudEvents\Types\Uri;

abstract class AbstractUriAttribute implements AttributeInterface
{
    private Uri $value;

    public function __construct(Uri $value)
    {
        $this->value = $value;
    }

    public function getValue(): Uri
    {
        return $this->value;
    }
}
