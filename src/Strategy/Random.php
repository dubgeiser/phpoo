<?php

declare(strict_types=1);

namespace Quotes\Strategy;

use Quotes\AttributableQuote;
use Quotes\Message;
use Quotes\Quote;
use Quotes\Source\Source;

use function array_rand;

class Random implements Strategy
{
    /**
     * {@inheritDoc}
     */
    public function retrieve(Source $source) : Quote
    {
        $quotes = $source->all();
        $quote  = $quotes[array_rand($quotes)];
        return new AttributableQuote(new Message($quote), $source->author());
    }
}
