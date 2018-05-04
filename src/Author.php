<?php

namespace Trump;

/**
 * The author of quote.
 */
class Author
{
    const NAME_LEN_MIN = 1;
    const NAME_LEN_MAX = 200;

    /**
     * @var string
     */
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
            new AuthorNameLengthException(
                sprintf(
                    "Author name must be between %d and %d chars",
                    self::NAME_LEN_MIN,
                    self::NAME_LEN_MAX
                )
            )
        );

        $this->name = $name;
    }

    public function equals(Author $other)
    {
        // Note: Author is actually more of an entity, but this will suffice for
        // demo purposes.
        return $this->name == $other->name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
