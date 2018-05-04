<?php

namespace Quotes\Kanye;

use Quotes\Author;
use Quotes\Message;
use Quotes\Quote;
use Quotes\AttributableQuote;

class QuoteSource implements \Quotes\QuoteSource
{
    public function retrieve(): Quote
    {
        return new AttributableQuote(new Message('TEST'), new Author('Kanye'));
    }
}
