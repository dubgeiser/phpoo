<?php

declare(strict_types=1);

namespace Quotes;

use function assert;
use function mb_strlen;
use function sprintf;

/**
 * The author of quote.
 */
class Author
{
    public const NAME_LEN_MIN = 1;
    public const NAME_LEN_MAX = 200;

    /** @var string */
    private $name;

    /**
     * @param string $name The name of the author.
     */
    public function __construct(string $name)
    {
        // TODO This does not seem to be catchable in a unit test :-(
        assert(
            mb_strlen($name) >= self::NAME_LEN_MIN
            && mb_strlen($name) <= self::NAME_LEN_MAX,
            new AuthorNameLengthError(
                sprintf(
                    'Author name must be between %d and %d chars',
                    self::NAME_LEN_MIN,
                    self::NAME_LEN_MAX
                )
            )
        );

        $this->name = $name;
    }

    public function equals(Author $other) : bool
    {
        // Note: Author is actually more of an entity, but this will suffice for
        // demo purposes.
        return $this->name === $other->name;
    }

    public function __toString() : string
    {
        return $this->name;
    }
}
