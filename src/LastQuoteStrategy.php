<?php

namespace Quotes;

class LastQuoteStrategy implements QuoteStrategy
{
    private $author;

    public function setAuthor(Author $author)
    {
        $this->author = $author;
    }

    public function retrieve($quotes): Quote
    {
        $quote = array_pop($quotes);
        return new AttributableQuote(new Message($quote), $this->author);
    }
}
