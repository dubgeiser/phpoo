<?php

declare(strict_types=1);

namespace Quotes;

use Quotes\Source\Source;
use Quotes\Strategy\Strategy;

class QuoteGenerator
{
    /** @var Source */
    private $source;

    public function __construct(Source $source)
    {
        $this->setSource($source);
    }

    public function setSource(Source $source) : void
    {
        $this->source = $source;
    }

    public function retrieve(Strategy $strategy) : Quote
    {
        return $this->source->retrieve($strategy);
    }
}
