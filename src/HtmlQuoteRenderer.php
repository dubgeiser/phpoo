<?php

namespace Trump;

class HtmlQuoteRenderer implements Renderable
{
    private $quote;

    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
    }

    public function __toString()
    {
        return '<blockquote><p>'
            . (string) $this->quote->getMessage()
            . ' -- '
            .  (string) $this->quote->getAuthor()
            . '</blockquote></p>'
            . "\n";
    }
}
