<?php

declare(strict_types=1);

namespace Quotes\Strategy;

use Quotes\Attributable;
use Quotes\Quote;
use Quotes\Source\Source;
use function array_rand;

class Random implements Strategy
{
    /**
     * {@inheritDoc}
     */
    public function retrieve(Source $source) : Attributable
    {
        $quotes = $source->all();
        $quote  = $quotes[array_rand($quotes)];
        return new Quote($quote, $source->author());
    }
}
