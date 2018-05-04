<?php

declare(strict_types=1);

namespace Quotes;

class QuoteGenerator
{
    /** @var QuoteSource */
    private $source;

    public function __construct(QuoteSource $source)
    {
        $this->setSource($source);
    }

    public function setSource(QuoteSource $source) : void
    {
        $this->source = $source;
    }

    public function retrieve(QuoteStrategy $strategy) : Quote
    {
        return $this->source->retrieve($strategy);
    }
}
