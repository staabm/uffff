<?php

declare(strict_types=1);

namespace Uffff\Filter;

use Uffff\Contracts\Filter;
use Uffff\Value\Newline;
use Webmozart\Assert\Assert;

/**
 * @psalm-immutable
 * @internal
 */
readonly final class HarmonizeNewlines implements Filter
{
    // Order matters, Windows must come first
    private const REGEX = '/(?:' . Newline::WINDOWS->value . '|' . Newline::MAC->value . '|' . Newline::UNIX->value . ')/';

    public function __construct(
        private Newline $newline
    ) {
    }

    public function __invoke(string $value): string
    {
        $harmonized = preg_replace(self::REGEX, $this->newline->value, $value);

        Assert::string($harmonized, 'Cannot standardize newlines in "%s"');

        return $harmonized;
    }
}
