<?php

declare(strict_types=1);

namespace Quotes\Strategy;

use Quotes\AttributableQuote;
use Quotes\Message;
use Quotes\Quote;
use Quotes\Source\Source;

use function array_pop;

class Last implements Strategy
{
    /**
     * {@inheritDoc}
     */
    public function retrieve(Source $source) : Quote
    {
        $quotes = $source->all();
        $quote  = array_pop($quotes);
        return new AttributableQuote(new Message($quote), $source->author());
    }
}
