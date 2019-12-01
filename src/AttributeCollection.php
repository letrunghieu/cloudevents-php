<?php


namespace HieuLe\CloudEvents;


use HieuLe\CloudEvents\Attributes\AttributeInterface;

class AttributeCollection
{
    /** @var AttributeInterface[] */
    private array $attributes;

    public function __construct()
    {
        $this->attributes = [];
    }

    public function findAttribute(string $name): ?AttributeInterface
    {
        return $this->attributes[$name] ?? null;
    }

    public function addAttribute(AttributeInterface $attribute): void
    {
        $this->attributes[$attribute->getName()] = $attribute;
    }

    public function removeAttribute(string $name): void
    {
        if (!isset($this->attributes[$name])) {
            return;
        }

        unset($this->attributes[$name]);
    }
}
