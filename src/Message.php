<?php

declare(strict_types=1);

namespace Quotes;

/**
 * Message coming from the api.
 */
class Message
{
    /** @var string */
    private $text;

    /**
     * @param string $text The text in this message
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function equals(Message $other) : bool
    {
        return $this->text === $other->text;
    }

    public function __toString() : string
    {
        return $this->text;
    }
}
