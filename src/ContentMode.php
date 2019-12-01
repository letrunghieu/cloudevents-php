<?php

namespace HieuLe\CloudEvents;

class ContentMode
{
    private const STRUCTURED_MODE = 'structured';
    private const BINARY_MODE = 'binary';

    private static array $instances;

    public static function structuredMode(): self
    {
        return self::getStaticInstance(self::STRUCTURED_MODE);
    }

    public static function binaryMode(): self
    {
        return self::getStaticInstance(self::BINARY_MODE);
    }

    private static function getStaticInstance(string $internalValue): self
    {
        if (!isset(self::$instances[$internalValue])) {
            self::$instances[$internalValue] = new self($internalValue);
        }

        return self::$instances[$internalValue];
    }

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function isEqualTo(ContentMode $another): bool
    {
        return $this->value === $another->value;
    }
}
