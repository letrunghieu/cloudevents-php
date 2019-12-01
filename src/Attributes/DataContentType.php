<?php

namespace HieuLe\CloudEvents\Attributes;

use HieuLe\CloudEvents\Attributes\Abstracts\AbstractStringAttribute;

class DataContentType extends AbstractStringAttribute
{
    public const ATTR_NAME = 'datacontenttype';

    public function getName(): string
    {
        return self::ATTR_NAME;
    }
}
