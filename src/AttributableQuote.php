<?php

declare(strict_types=1);

namespace Quotes;

/**
 * A quote coming from an api.
 */
class AttributableQuote implements Quote
{
    /** @var Message */
    private $message;

    /** @var Author */
    private $author;

    public function __construct(Message $message, Author $author)
    {
        $this->message = $message;
        $this->author  = $author;
    }

    public function getMessage() : Message
    {
        return $this->message;
    }

    public function getAuthor() : Author
    {
        return $this->author;
    }

    public function equals(AttributableQuote $other) : bool
    {
        return $this->getMessage() === $other->getMessage()
            && $this->getAuthor()  === $other->getAuthor();
    }

    public function __toString() : string
    {
        return (string) $this->message . ' -- ' . (string) $this->author;
    }
}
