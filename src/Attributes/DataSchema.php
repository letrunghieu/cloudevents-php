<?php

namespace HieuLe\CloudEvents\Attributes;

use HieuLe\CloudEvents\Attributes\Abstracts\AbstractUriAttribute;

class DataSchema extends AbstractUriAttribute
{
    public const ATTR_NAME = 'dataschema';

    public function getName(): string
    {
        return self::ATTR_NAME;
    }
}
