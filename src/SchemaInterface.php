<?php

declare(strict_types=1);

namespace FiveOrbs\Sire;

/**
 * @psalm-api
 */
interface SchemaInterface
{
    public function validate(array $data, int $level = 1): bool;
    public function errors(bool $grouped = false): array;
    public function values(): array;
    public function pristineValues(): array;
}
