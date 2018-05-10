<?php

declare(strict_types=1);

namespace Quotes\Strategy;

use Quotes\Quote;
use Quotes\Source\Source;

/**
 * Strategy for retrieving 1 quote from a source.
 */
interface Strategy
{
    public function retrieve(Source $source) : Quote;
}
