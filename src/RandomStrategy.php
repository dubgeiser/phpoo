<?php

declare(strict_types=1);

namespace Quotes;

use function array_rand;

class RandomStrategy implements QuoteStrategy
{
    /** @var Author */
    private $author;

    public function setAuthor(Author $author) : void
    {
        $this->author = $author;
    }

    /**
     * @param string[] $quotes
     */
    public function retrieve(array $quotes) : Quote
    {
        $quote = $quotes[array_rand($quotes)];
        return new AttributableQuote(new Message($quote), $this->author);
    }
}
