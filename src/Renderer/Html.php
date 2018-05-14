<?php

declare(strict_types=1);

namespace Quotes\Renderer;

use Quotes\Attributable;

class Html implements Renderable
{
    /** @var Attributable */
    private $quote;

    public function __construct(Attributable $quote)
    {
        $this->quote = $quote;
    }

    public function __toString() : string
    {
        return '<blockquote><p>'
            . $this->quote->getText()
            . ' -- '
            . (string) $this->quote->getAuthor()
            . '</blockquote></p>'
            . "\n";
    }
}
