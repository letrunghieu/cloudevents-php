<?php

namespace HieuLe\CloudEvents\Attributes\Abstracts;

use HieuLe\CloudEvents\Attributes\AttributeInterface;
use Psr\Http\Message\UriInterface;

abstract class AbstractUriAttribute implements AttributeInterface
{
    private UriInterface $value;

    public function __construct(UriInterface $value)
    {
        $this->value = $value;
    }

    public function getValue(): UriInterface
    {
        return $this->value;
    }
}
