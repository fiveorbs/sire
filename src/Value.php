<?php

declare(strict_types=1);

namespace Conia\Seiher;


class Value
{
    public function __construct(
        public readonly mixed $value,
        public readonly mixed $pristine,
        public readonly null|array|string $error = null,
    ) {
    }
}
