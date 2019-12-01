<?php

namespace HieuLe\CloudEvents;

use DateTimeInterface;
use HieuLe\CloudEvents\Attributes\AttributeInterface;
use HieuLe\CloudEvents\Attributes\Data;
use HieuLe\CloudEvents\Attributes\DataContentType;
use HieuLe\CloudEvents\Attributes\DataSchema;
use HieuLe\CloudEvents\Attributes\Id;
use HieuLe\CloudEvents\Attributes\Source;
use HieuLe\CloudEvents\Attributes\SpecVersion;
use HieuLe\CloudEvents\Attributes\Subject;
use HieuLe\CloudEvents\Attributes\Time;
use HieuLe\CloudEvents\Attributes\Type;
use Psr\Http\Message\UriInterface;

class CloudEvent
{
    private AttributeCollection $attributeCollection;

    public function __construct(
        string $id,
        UriInterface $source,
        string $specVersion,
        string $type
    ) {
        $this->attributeCollection = new AttributeCollection();

        $this->setId($id)
            ->setSource($source)
            ->setSpecVersion($specVersion)
            ->setType($type);
    }

    public function getId(): string
    {
        return $this->getAttribute(Id::ATTR_NAME)->getValue();
    }

    public function getSource(): UriInterface
    {
        return $this->getAttribute(Source::ATTR_NAME)->getValue();
    }

    public function getSpecVersion(): string
    {
        return $this->getAttribute(SpecVersion::ATTR_NAME)->getValue();
    }

    public function getType(): string
    {
        return $this->getAttribute(Type::ATTR_NAME)->getValue();
    }

    public function getDataContentType(): ?string
    {
        $attribute = $this->getAttribute(DataContentType::ATTR_NAME);

        if ($attribute === null) {
            return null;
        }

        return $attribute->getValue();
    }

    public function getDataSchema(): ?UriInterface
    {
        $attribute = $this->getAttribute(DataSchema::ATTR_NAME);

        if ($attribute === null) {
            return null;
        }

        return $attribute->getValue();
    }

    public function getSubject(): ?string
    {
        $attribute = $this->getAttribute(Subject::ATTR_NAME);

        if ($attribute === null) {
            return null;
        }

        return $attribute->getValue();

    }

    public function getTime(): ?DateTimeInterface
    {
        $attribute = $this->getAttribute(Time::ATTR_NAME);

        if ($attribute === null) {
            return null;
        }

        return $attribute->getValue();
    }

    public function getData(): ?object
    {
        $attribute = $this->getAttribute(Data::ATTR_NAME);

        if ($attribute === null) {
            return null;
        }

        return $attribute->getValue();
    }

    public function setId(string $id): self
    {
        $this->attributeCollection
            ->addAttribute(new Id($id));

        return $this;
    }

    public function setSource(UriInterface $source): self
    {
        $this->attributeCollection
            ->addAttribute(new Source($source));

        return $this;
    }

    public function setSpecVersion(string $specVersion): self
    {
        $this->attributeCollection
            ->addAttribute(new SpecVersion($specVersion));

        return $this;
    }

    public function setType(string $type): self
    {
        $this->attributeCollection
            ->addAttribute(new Type($type));

        return $this;
    }

    public function setDataContentType(?string $dataContentType): self
    {
        if ($dataContentType === null) {
            $this->attributeCollection
                ->removeAttribute(DataContentType::ATTR_NAME);

            return $this;
        }

        $this->attributeCollection
            ->addAttribute(new DataContentType($dataContentType));

        return $this;
    }

    public function setDataSchema(?UriInterface $dataSchema): self
    {
        if ($dataSchema === null) {
            $this->attributeCollection
                ->removeAttribute(DataSchema::ATTR_NAME);

            return $this;
        }

        $this->attributeCollection
            ->addAttribute(new DataSchema($dataSchema));

        return $this;
    }

    public function setSubject(?string $subject): self
    {
        if ($subject === null) {
            $this->attributeCollection
                ->removeAttribute(Subject::ATTR_NAME);

            return $this;
        }

        $this->attributeCollection
            ->addAttribute(new Subject($subject));

        return $this;
    }

    public function setTime(?DateTimeInterface $time): self
    {
        if ($time === null) {
            $this->attributeCollection
                ->removeAttribute(Time::ATTR_NAME);

            return $this;
        }

        $this->attributeCollection
            ->addAttribute(new Time($time));

        return $this;
    }

    public function setData(?string $data): self
    {
        if ($data === null) {
            $this->attributeCollection
                ->removeAttribute(Data::ATTR_NAME);

            return $this;
        }

        $this->attributeCollection
            ->addAttribute(new Data($data));

        return $this;
    }

    private function getAttribute(string $name): ?AttributeInterface
    {
        return $this->attributeCollection
            ->findAttribute($name);
    }
}
