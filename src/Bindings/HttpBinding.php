<?php

namespace HieuLe\CloudEvents\Bindings;

use HieuLe\CloudEvents\CloudEvent;
use HieuLe\CloudEvents\ContentMode;
use Psr\Http\Message\MessageInterface;

class HttpBinding
{
    public function toCloudEvent(MessageInterface $message): CloudEvent
    {

    }

    public function copyToMessage(
        CloudEvent $cloudEvent,
        MessageInterface $message,
        ContentMode $contentMode
    ): MessageInterface {

    }
}
