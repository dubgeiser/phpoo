<?php

declare(strict_types=1);

namespace Quotes\Source;

use Quotes\Author;

class Kanye implements Source
{
    /** @var Author */
    private $author;

    /** @var String[] */
    private $quotes;

    public function __construct()
    {
        $this->author = new Author('Kanye');
        $this->quotes = ['TEST 1', 'TEST 2'];
    }

    /**
     * {@inheritDoc}
     */
    public function all() : array
    {
        return $this->quotes;
    }

    public function author() : Author
    {
        return $this->author;
    }
}
