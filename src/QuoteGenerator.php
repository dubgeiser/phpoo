<?php

namespace Quotes;

class QuoteGenerator
{
    /**
     * @var QuoteSource
     */
    private $source;

    public function __construct(QuoteSource $source)
    {
        $this->setSource($source);
    }

    public function setSource(QuoteSource $source)
    {
        $this->source = $source;
    }

    public function retrieve(QuoteStrategy $strategy) : Quote
    {
        return $this->source->retrieve($strategy);
    }
}
