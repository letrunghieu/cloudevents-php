<?php

namespace HieuLe\CloudEvents\Attributes;

use HieuLe\CloudEvents\Attributes\Abstracts\AbstractUriAttribute;

class Source extends AbstractUriAttribute
{
    public const ATTR_NAME = 'source';

    public function getName(): string
    {
        return self::ATTR_NAME;
    }
}
