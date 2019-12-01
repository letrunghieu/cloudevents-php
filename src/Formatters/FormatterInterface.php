<?php

namespace HieuLe\CloudEvents\Formatters;

use HieuLe\CloudEvents\CloudEvent;

interface FormatterInterface
{
    public function fromString(string $data): CloudEvent;

    public function toString(CloudEvent $cloudEvent): string;
}
