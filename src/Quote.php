<?php

declare(strict_types=1);

namespace Quotes;

/**
 * A quote coming from an api.
 */
class Quote implements Attributable
{
    /** @var string */
    private $text;

    /** @var Author */
    private $author;

    public function __construct(string $text, Author $author)
    {
        $this->text   = $text;
        $this->author = $author;
    }

    public function getText() : string
    {
        return $this->text;
    }

    public function getAuthor() : Author
    {
        return $this->author;
    }

    public function equals(Quote $other) : bool
    {
        return $this->getText() === $other->getText()
            && $this->getAuthor()  === $other->getAuthor();
    }

    public function __toString() : string
    {
        return $this->text . ' -- ' . (string) $this->author;
    }
}
