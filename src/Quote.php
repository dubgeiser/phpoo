<?php

namespace Trump;

/**
 * A quote coming from an api.
 */
class Quote
{
    /**
     * @var Message
     */
    private $message;

    /**
     * @var Author
     */
    private $author;

    public function __construct(Message $message, Author $author)
    {
        $this->message = $message;
        $this->author = $author;
    }

    public function getMessage() : Message
    {
        return $this->message;
    }

    public function getAuthor() : Author
    {
        return $this->author;
    }

    public function equals(Quote $other) : bool
    {
        return $this->message = $other->message
            && $this->author = $other->author;
    }
}
