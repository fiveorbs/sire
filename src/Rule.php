<?php

declare(strict_types=1);

namespace Conia\Sire;


class Rule
{
    public readonly string $label;

    public function __construct(
        public readonly string $field,
        public readonly string|SchemaInterface $type,
        public readonly array $validators,
    ) {
    }

    public function label(string $label): void
    {
        $this->label = $label;
    }

    public function name(): string
    {
        return isset($this->label) ? $this->label : $this->field;
    }

    public function type(): string
    {
        return is_string($this->type) ? $this->type : 'schema';
    }
}
