<?php

namespace Quotes;

class RandomStrategy implements QuoteStrategy
{
    private $author;

    public function setAuthor(Author $author)
    {
        $this->author = $author;
    }

    public function retrieve($quotes): Quote
    {
        $quote = $quotes[array_rand($quotes)];
        return new AttributableQuote(new Message($quote), $this->author);
    }
}
