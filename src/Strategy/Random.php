<?php

declare(strict_types=1);

namespace Quotes\Strategy;

use Quotes\AttributableQuote;
use Quotes\Author;
use Quotes\Message;
use Quotes\Quote;
use function array_rand;

class Random implements Strategy
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
