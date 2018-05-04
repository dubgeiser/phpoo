<?php

declare(strict_types=1);

namespace Quotes;

interface QuoteStrategy
{
    public function setAuthor(Author $author) : void;

    /**
     * @param string[] $quotes
     */
    public function retrieve(array $quotes) : Quote;
}
