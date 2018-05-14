<?php

declare(strict_types=1);

namespace Quotes;

use Quotes\Source\Source;
use Quotes\Strategy\Strategy;

class QuoteGenerator
{
    /** @var Source */
    private $source;

    /** @var Strategy */
    private $strategy;


    public function __construct(Source $source, Strategy $strategy)
    {
        $this->setSource($source);
        $this->setStrategy($strategy);
    }

    public function retrieve() : Attributable
    {
        return $this->strategy->retrieve($this->source);
    }

    public function setSource(Source $source) : void
    {
        $this->source = $source;
    }

    public function setStrategy(Strategy $strategy) : void
    {
        $this->strategy = $strategy;
    }
}
