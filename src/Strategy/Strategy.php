<?php

declare(strict_types=1);

namespace Quotes\Strategy;

use Quotes\Author;
use Quotes\Quote;

interface Strategy
{
    public function setAuthor(Author $author) : void;

    /**
     * @param string[] $quotes
     */
    public function retrieve(array $quotes) : Quote;
}
