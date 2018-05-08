<?php

declare(strict_types=1);

namespace Quotes\Source;

use Quotes\AttributableQuote;
use Quotes\Author;
use Quotes\Message;
use Quotes\Quote;
use Quotes\Strategy\Strategy;

class Kanye implements Source
{
    public function retrieve(Strategy $strategy) : Quote
    {
        return new AttributableQuote(new Message('TEST'), new Author('Kanye'));
    }
}
