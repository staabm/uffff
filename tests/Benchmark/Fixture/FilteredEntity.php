<?php

declare(strict_types=1);

namespace Uffff\Tests\Benchmark\Fixture;

use function Uffff\unicode;

readonly final class FilteredEntity
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = unicode($text);
    }

    public function getText(): string
    {
        return $this->text;
    }
}
