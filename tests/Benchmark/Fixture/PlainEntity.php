<?php

declare(strict_types=1);

namespace Uffff\Tests\Benchmark\Fixture;

readonly final class PlainEntity
{
    public function __construct(
        private string $text
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }
}
