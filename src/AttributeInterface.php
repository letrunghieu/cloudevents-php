<?php

namespace HieuLe\CloudEvents;


interface AttributeInterface
{
    public function getName(): string;

    public function getValue();
}
