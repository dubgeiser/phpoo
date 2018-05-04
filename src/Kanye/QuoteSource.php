<?php

namespace Quotes\Kanye;

use Quotes\Author;
use Quotes\Message;
use Quotes\Quote;
use Quotes\AttributableQuote;
use Quotes\QuoteStrategy;

class QuoteSource implements \Quotes\QuoteSource
{
    public function retrieve(QuoteStrategy $strategy): Quote
    {
        return new AttributableQuote(new Message('TEST'), new Author('Kanye'));
    }
}
