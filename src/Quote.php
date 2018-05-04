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

    public function equals(Quote $other)
    {
        return $this->message = $other->message
            && $this->author = $other->author;
    }
}
