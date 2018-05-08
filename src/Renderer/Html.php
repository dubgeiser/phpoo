<?php

declare(strict_types=1);

namespace Quotes\Renderer;

use Quotes\Quote;

class Html implements Renderable
{
    /** @var Quote */
    private $quote;

    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
    }

    public function __toString() : string
    {
        return '<blockquote><p>'
            . (string) $this->quote->getMessage()
            . ' -- '
            . (string) $this->quote->getAuthor()
            . '</blockquote></p>'
            . "\n";
    }
}
