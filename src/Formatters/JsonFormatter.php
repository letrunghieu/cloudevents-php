<?php

namespace HieuLe\CloudEvents\Formatters;

use HieuLe\CloudEvents\CloudEvent;

class JsonFormatter implements FormatterInterface
{

    public function fromString(string $data): CloudEvent
    {
        // TODO: Implement fromString() method.
    }

    public function toString(CloudEvent $cloudEvent): string
    {
        // TODO: Implement toString() method.
    }
}
