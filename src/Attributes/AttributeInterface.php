<?php

namespace HieuLe\CloudEvents\Attributes;


interface AttributeInterface
{
    public function getName(): string;

    public function getValue();
}
