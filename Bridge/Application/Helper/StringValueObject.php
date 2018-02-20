<?php
namespace Bridge\Application\Helper;

class StringValueObject {
    private $value;

    private $isNull;

    public function __construct(String $value = null) {
        $this->value = $value;
        $this->isNull = $value === null;
    }

    public function getValue(): String {
        return $this->value;
    }

    public function isNull(): bool {
        return $this->isNull;
    }

    public function __toString()
    {
        return $this->getValue();
    }

}